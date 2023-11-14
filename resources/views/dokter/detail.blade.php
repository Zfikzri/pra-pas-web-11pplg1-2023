@extends('layout.main')

@section('content')
    <h2>Detail Dokter {{ $dokter->nama }}</h2>
    <div class="form">
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" name="id" id="id" value="{{ $dokter->id }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $dokter->nama }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Nomor Hp</label>
            <input type="text" class="form-control" name="nomor_hp" id="nomor_hp" value="{{ $dokter->nomor_hp }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Asal Kota</label>
            <input type="text" class="form-control" name="askot" id="askot" value="{{ $dokter->askot }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Tanggal Lahir</label>
            <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $dokter->tanggal_lahir }}" disabled>
        </div>
        <div class="text-center"> 
        <a href="/dokter/all2" class="btn btn-primary btn-lg">Back</a>
    </div>
    </div>

    @endsection