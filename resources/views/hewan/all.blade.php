@extends('layout.main')

@section('content')
<h1>Daftar Hewan Adopsi</h1>
<table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Makanan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($hewan as $hewans)
    <tr>
        <td>{{ $hewans->id }}</td>
        <td>{{ $hewans->nama }}</td>
        <td>{{ $hewans->jumlah }}</td>
        <td>{{ $hewans->makanan }}</td>
        <td>
            <a href= "/hewan/detail/{{ $hewans->id }}" class="btn btn-primary">Detail</a>
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
        </td>
        
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
