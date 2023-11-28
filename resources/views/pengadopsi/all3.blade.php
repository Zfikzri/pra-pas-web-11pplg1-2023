@extends('layout.main')

@section('content')
<h1>Daftar Pengadopsi</h1>
<table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Gender</th>
      <th scope="col">Hewan Yang Di Adopsi</th>
      <th scope="col">Tanggal Adopsi</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pengadopsi as $pengadopsis)
    <tr>
        <td>{{ $pengadopsis->id }}</td>
        <td>{{ $pengadopsis->nama }}</td>
        <td>{{ $pengadopsis->umur }}</td>
        <td>{{ $pengadopsis->gender }}</td>
        <td>{{ $pengadopsis->hewan }}</td>
        <td>{{ $pengadopsis->tanggal_adopsi }}</td>
        <td>
            <a href= "/pengadopsi/detail/{{ $pengadopsis->id }}" class="btn btn-primary">Detail</a>
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
        </td>
        
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
