@extends('layout.v_template')
@section('judul', 'Data KGB')

@section('konten')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

@php
    $flag = true;
@endphp

@foreach ($selisih as $beda)
    @if ($beda < 33)
        {{ $flag = false }}
        @break              
    @endif    
@endforeach

@if ( $flag == true )
    <div class="callout callout-success">
        <h4>Tidak ada KGB dalam 30 hari ke depan</h4>
        <p>Tidak ada KGB dalam 30 hari ke depan.</p>
    </div>
@endif

<p class="btn bg-navy margin">Tanggal: <strong>{{ now()->isoFormat("D MMM YYYY") }} </strong></p>

<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Pegawai Yang Akan Melakukan KGB</h3>
    </div>
    <div class="box-body">       
            
        <table class="table table-bordered table-hover">
            <thead class="box">
                <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal KGB</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="box">
                
                @foreach ($sortedDate as $kgb)
                    @if( Carbon\Carbon::parse($kgb->tgl_kgb)->diffInDays(now()) < 33 ) <tr>
                        <td>{{ $kgb->nama }}</td>
                        <td>{{ $kgb->nip }}</td>
                        <td>{{ $kgb->jk }}</td>
                        <td>{{ Carbon\Carbon::parse($kgb->tgl_kgb)->isoFormat("D MMM YYYY") }}</td>
                        <td>{{ $kgb->no_hp }}</td>
                        <td> <form action="{{ route('proses') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $kgb->id_peg }}">
                            <button href="{{ route('proses') }}" type="submit" class="btn btn-block btn-success">Proses</a></td>
                            </form>
                        </tr>
                    @endif
                @endforeach
            
            </tbody>
        </table>
        
    </div>
</div>

@endsection