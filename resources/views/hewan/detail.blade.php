@extends('layout.main')

@section('content')
    <h2>Detail Hewan {{ $hewan->nama }}</h2>
    <div class="form">
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" name="id" id="id" value="{{ $hewan->id }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $hewan->nama }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Jumlah</label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" value="{{ $hewan->jumlah }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Makanan</label>
            <input type="text" class="form-control" name="makanan" id="makanan" value="{{ $hewan->makanan }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Tanggal Lahir</label>
            <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $hewan->tanggal_lahir }}" disabled>
        </div>
        <div class="text-center"> 
        <a href="/hewan/all" class="btn btn-primary btn-lg">Back</a>
    </div>
    </div>

    @endsection