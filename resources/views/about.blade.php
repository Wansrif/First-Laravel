@extends('layouts.main')

@section('container')

  <h1>Halaman about</h1>
  <h3>{{ $nama }}</h3>
  <p>{{ $email }}</p>
  <img src="img/{{ $image }}" alt="{{ $nama }}" class="img-thumbnail rounded-circle" style="width: 180px">

@endsection