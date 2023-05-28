@extends('pegawais.layout')
 
@section('content')
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left">
 <h2>Edit Product</h2>
 </div>
 <div class="pull-right">
 <a class="btn btn-primary" href="{{ route('oegawais.index') }}"> Back</a>
 </div>
 </div>
 </div>
 
 @if ($errors->any())
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your 
input.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 
 <form action="{{ route('pegawais.update',$pegawai->id) }}" 
method="POST">
 @csrf
 @method('PUT')
 
 <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>NIP:</strong>
    <input type="text" name="nip" value="{{ $pegawai->nip }}" class="form-control" placeholder="NIP">
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Nama:</strong>
    <textarea class="form-control" style="height:150px"name="nama" placeholder="nama">{{ $pegawai->nama }}</textarea>
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Jenis Kelamin:</strong>
    <textarea class="form-control" style="height:150px"name="jeniskelamin" placeholder="jeniskelamin">{{ $pegawai->jenis_kelamin }}</textarea>
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Jabatan:</strong>
    <textarea class="form-control" style="height:150px"name="jabatan" placeholder="jabatan">{{ $pegawai->jabatan }}</textarea>
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Alamat:</strong>
    <textarea class="form-control" style="height:150px"name="alamat" placeholder="alamat">{{ $pegawai->alamat }}</textarea>
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
 <button type="submit" class="btn btn-primary">Submit</button>
 </div>
 </div>
 
 </form>
@endsection