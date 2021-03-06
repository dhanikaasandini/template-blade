<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class crudcontroller extends Controller
{
    public function create() {
        return view ('pertanyaan.create');
    }

    public function store(Request $request) { 
        //dd($request->all());
         $request->validate([
            
             'judul' => 'required',
             'isi' => 'required'
         ]);


            $query = DB::table('pertanyaan')->insert([
             
                "judul" => $request ["judul"],
                "isi" => $request ["isi"]
                ]);

            return redirect('pertanyaan')->with('success','pertanyaan Berhasil Disimpan');
    }
    public function index() { 
        $pertanyaan=DB::table('pertanyaan')->get(); 
        //dd($pertanyaan);
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function show($id) {
        $post = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.show', compact('post'));
        //dd($post);
    }
    public function edit($id) {
        $post = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.edit', compact('post'));

    }
    public function update($id, Request $request) {
        $request->validate([
       
            'judul' => 'required',
            'isi' => 'required',
        ]);
        $query= DB::table('pertanyaan')
                    ->where('id', $id)
                    ->update([
                    
                        'judul' => $request ["judul"],
                        'isi' => $request ["isi"],
                    ]);
    
    return redirect('/pertanyaan')->with('success','Berhasil update post!');
    }

    public function destroy ($id) {
        $query = DB::table('pertanyaan')->where('id',$id)->delete();
        return redirect ('/pertanyaan')->with('success','Post berhasil dihapus!');
    }
}

