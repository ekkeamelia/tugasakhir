@extends('pegawais.layout')
 
@section('content')
<div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left">
 <h2>Add New Product</h2>
 </div>
 <div class="pull-right">
 <a class="btn btn-primary" href="{{ route('pegawais.index') 
}}"> Back</a>
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
 
<form action="{{ route('pegawais.store') }}" method="POST">
 @csrf
 
 <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>NIP:</strong>
    <input type="text" name="nip" class="form-control" placeholder="Nip">
    </div>
 </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Nama:</strong>
    <textarea class="form-control" style="height:150px" name="nama" placeholder="Nama"></textarea>
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Jenis Kelamin:</strong>
    <textarea class="form-control" style="height:150px" name="jeniskelamin" placeholder="Jenis Kelamin"></textarea>
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>No HP:</strong>
    <textarea class="form-control" style="height:150px" name="nohp" placeholder="No HP"></textarea>
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Jabatan:</strong>
    <textarea class="form-control" style="height:150px" name="jabatan" placeholder="Jabatan"></textarea>
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Alamat:</strong>
    <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat"></textarea>
 </div>
 </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btnprimary">Submit</button>
 </div>
 </div>
 
</form>
@endsection