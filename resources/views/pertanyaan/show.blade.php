@extends('adminlte.master')

@section('content')
    <div class="mt-3 ml-3">
    <h3>Judul:   {{$post->judul }} </h3>
    <h3>Isi:</h3>    <p>{{$post->isi }} </p>
    </div>
@endsection