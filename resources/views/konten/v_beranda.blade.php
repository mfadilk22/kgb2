@extends('layout.v_template')
@section('judul', 'Beranda')

@section('konten')
    <table class = "table table-hover">
        <thead class="box box-primary">
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
        <tbody class="box box-primary">
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
@endsection