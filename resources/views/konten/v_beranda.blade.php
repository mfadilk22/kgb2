@extends('layout.v_template')
@section('judul', 'Beranda')

@section('konten')
    <p>Tanggal: {{ now()->isoFormat("D MMM YYYY") }}</p>
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Tabel KGB Pegawai</h3>
        </div>
        <div class="box-body">
            <table class = "table table-bordered table-hover">      
                    
                <thead class="box">
                    <tr>
                        <th>Id Pegawai</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal KGB</th>
                        <th>No HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="box">
                    @foreach ($kgb as $kgb)
                        <tr>
                            <td>{{ $kgb->id_peg }}</td>
                            <td>{{ $kgb->nip }}</td>
                            <td>{{ $kgb->nama }}</td>
                            <td>{{ $kgb->jk }}</td>
                            <td>{{ $kgb->tgl_kgb }}</td>
                            <td>{{ $kgb->no_hp }}</td>
                            <td><a href="" class="btn btn-block btn-success">Proses</a></td>
                        </tr>
                    @endforeach
                </tbody>        
            </table>
        </div>    
    </div>
    {{-- @foreach ($fadil as $tgl)
        {{ $tgl->nip }}<br>
    @endforeach --}}
@endsection