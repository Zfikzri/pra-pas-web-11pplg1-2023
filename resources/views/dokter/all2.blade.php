@extends('layout.main')

@section('content')
<h1>Daftar Dokter Hewan</h1>
<table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Nomor Hp</th>
      <th scope="col">Asal Kota</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($dokter as $dokters)
    <tr>
        <td>{{ $dokters->id }}</td>
        <td>{{ $dokters->nama }}</td>
        <td>{{ $dokters->nomor_hp }}</td>
        <td>{{ $dokters->askot }}</td>
        <td>
            <a href= "/dokter/detail/{{ $dokters->id }}" class="btn btn-primary">Detail</a>
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
