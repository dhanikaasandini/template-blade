@extends('adminlte.master')

@section ('content')
<div class="mt-3 ml-3">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Pertanyaan </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
              @endif
                <a class="btn btn-primary mb-2" href="/pertanyaan/create">Create New Pertanyaan</a>   
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th>Judul</th>
                      <th>Isi</th>
                    
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>   
                    @forelse($pertanyaan as $key => $post)
                    <tr>
                        <td>{{ $key + 1}} </td>
                        <td>{{ $post->judul }} </td>
                        <td>{{ $post->isi }} </td>
        

                        <td style="display: flex;">
                            <a href="/pertanyaan/{{$post->id}}" class="btn btn-info btn-sm">show</a>
                            <a href="/pertanyaan/{{$post->id}}/edit" class="btn btn-default btn-sm">edit</a>
                            <form action="/pertanyaan/{{$post->id}}" method="post">
                            @csrf
                            @method('DELETE')
                              <input type="submit" value="delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="5" align="center"> No Post(s) </td>
                        </tr>
                    
                    @endforelse
                  </tbody>
                </table>
              
</div>

@endsection