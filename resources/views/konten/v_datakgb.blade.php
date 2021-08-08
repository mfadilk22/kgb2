@extends('layout.v_template')
@section('judul', 'Data KGB')

@section('konten')
    @foreach ($kgb as $kgb)
        <h3>NIP : {{ $kgb["nip"] }}</h3>
        <h3>Nama : {{ $kgb["nama"] }}</h3>
        <h3>Jabatan : {{ $kgb["jabatan"] }}</h3>
    @endforeach    
@endsection