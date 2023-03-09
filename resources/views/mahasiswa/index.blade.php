@extends('layout.template');
@section('konten')
    
<!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">

    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href='{{ url('mahasiswa/create')}}' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">NIM</th>
                <th class="col-md-4">Nama</th>
                <th class="col-md-2">Jurusan</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = $data->firstItem() ?>
            @foreach ($data as $item)
            <tr>
                <td>{{$no}}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jurusan }}</td>
                <td>
                    <a href='' class="btn btn-warning btn-sm">Edit</a>
                    <a href='' class="btn btn-danger btn-sm">Del</a>
                </td>
            </tr>
            <?php $no++ ?>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
<!-- AKHIR DATA -->
@endsection