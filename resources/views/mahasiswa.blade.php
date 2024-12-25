
@extends('layouts.main')
@section('content')

    <h1>DATA MAHASISWA</h1>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
        </tr>
        @foreach ($mahasiswas as $mahasiswa)
       {{-- @foreach ($collection as $item)  collection itu ibarat nama data base nya: mahasiswas  item itu nama file nya: mahasiswa --}}
        
        <tr>
            <td>{{$mahasiswas->firstItem()+$loop->index}}</td>
            <td>{{$mahasiswa->nim }}</td>
            <td>{{$mahasiswa->nama_lengkap }}</td>
            <td>{{$mahasiswa->email }}</td>
            <td>{{$mahasiswa->alamat }}</td>
        </tr>
        @endforeach

    </table>
  {{ $mahasiswas->links()  }}
@endsection