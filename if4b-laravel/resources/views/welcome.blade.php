@extends('layout.main')
@section('title','Halaman Mahasiswa')
@section('subtitle','Mahasiswa')

@section('content')
{{Auth::user()->peran->nama}}
{{Auth::user()->name}}
@endsection