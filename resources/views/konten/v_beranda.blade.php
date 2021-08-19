@extends('layout.v_template')
@section('judul', 'Beranda')

@section('konten')
    @foreach ($selisih as $selisih)
        @if ($selisih > 33)
            <div class="callout callout-danger">
                <h4>Mohon untuk melakukan pemberitahuan KGB</h4>
                <p>Silakan menuju halaman <a href="{{ route('pemberitahuankgb') }}"><strong>Pemberitahuan KGB </strong></a></p>
            </div>
        @break
        @endif
    @endforeach
    
    <p class="btn bg-navy margin">Tanggal: <strong>{{ now()->isoFormat("D MMM YYYY") }} </strong></p>
    {{-- <p>Selisih tgl KGB dgn Hari ini:
        @foreach ($selisih as $selisih)
            <p>{{ $selisih }}</p>
        @endforeach
    </p>
    @foreach ($tanggal as $tanggal)
        {{ \Carbon\Carbon::parse($tanggal->tgl_kgb)->isoFormat("D MMM YYYY") }}<br>
    @endforeach --}}
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Tabel KGB Pegawai</h3>
        </div>
        <div class="box-body">
            <table class = "table table-bordered table-hover">      
                    
                <thead class="box">
                    <tr>                       
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal KGB</th>
                        <th>No HP</th>
                    </tr>
                </thead>
                <tbody class="box">
                    @foreach ($sortedDate as $kgb)
                        <tr>                            
                            <td>{{ $kgb->nama }}</td>
                            <td>{{ $kgb->nip }}</td>
                            <td>{{ $kgb->jk }}</td>
                            <td>{{ Carbon\Carbon::parse($kgb->tgl_kgb)->isoFormat("D MMM YYYY") }}
                            </td>
                            <td>{{ $kgb->no_hp }}</td>
                        </tr>
                    @endforeach
                </tbody>        
            </table>
        </div>    
    </div>
    {{-- @foreach ($tanggal as $tanggal)
        {{ $tanggal->tgl_kgb }}
    @endforeach --}}
@endsection