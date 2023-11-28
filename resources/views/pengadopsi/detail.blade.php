@extends('layout.main')

@section('content')
    <h2>Detail Pengadopsi {{ $pengadopsi->nama }}</h2>
    <div class="form">
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" name="id" id="id" value="{{ $pengadopsi->id }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $pengadopsi->nama }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Umur</label>
            <input type="text" class="form-control" name="umur" id="umur" value="{{ $pengadopsi->umur }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Gender</label>
            <input type="text" class="form-control" name="gender" id="gender" value="{{ $pengadopsi->gender }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Hewan yang diadopsi</label>
            <input type="text" class="form-control" name="hewan" id="hewan" value="{{ $pengadopsi->hewan }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Tanggal Adopsi</label>
            <input type="text" class="form-control" name="tanggal_adopsi" id="tanggal_adopsi" value="{{ $pengadopsi->tanggal_adopsi }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Tanggal Lahir</label>
            <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $pengadopsi->tanggal_lahir }}" disabled>
        </div>
        <div class="text-center"> 
        <a href="/pengadopsi/all3" class="btn btn-primary btn-lg">Back</a>
    </div>
    </div>

    @endsection