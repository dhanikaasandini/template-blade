@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Pertanyaan {{$post->id}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan/{{$post->id}}" method="POST">
              @csrf
              @method('PUT')
                
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="judul" class="form-control" id="judul" name="judul" value="{{old('judul', $post->judul )}}" placeholder="Judul" required>
                    @error('judul')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="isi" class="form-control" id="isi" name="isi" value="{{old('isi', $post->isi )}}" placeholder="Isi" required>
                    @error('isi')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
            </div>
        </div>

@endsection