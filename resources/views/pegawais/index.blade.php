@extends('pegawais.layout')
@section('content')
 <div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left">
    <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
   </div>
    <div class="pull-right">
    <a class="btn btn-success" href="{{ 
    route('pegawais.create') }}"> Create New Pegawai</a>
    </div>
    </div>
    </div>
 
 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
 
 <table class="table table-bordered">
 <tr>
 <th>No</th>
 <th>nip</th>
 <th>nama</th>
 <th>jenis_kelamin</th>
 <th>nohp</th>
 <th>jabatan</th>
 <th>alamat</th>
 <th width="280px">Action</th>
 </tr>
 @foreach ($pegawais as $pegawai)
 <tr>
 <td>{{ ++$i }}</td>
 <td>{{ $pegawai->nip }}</td>
 <td>{{ $pegawai->nama }}</td>
 <td>{{ $pegawai->jenis_kelamin }}</td>
 <td>{{ $pegawai->nohp }}</td>
 <td>{{ $pegawai->jabatan }}</td>
 <td>{{ $pegawai->alamat }}</td>
 <td>
 <form action="{{ route('pegawais.destroy',$pegawai->id) }}" 
method="POST">
 
 <a class="btn btn-info" href="{{ 
route('pegawais.show',$pegawai->id) }}">Show</a>
 
 <a class="btn btn-primary" href="{{ 
route('pegawais.edit',$pegawai->id) }}">Edit</a>
 
 @csrf
 @method('DELETE')
 
 <button type="submit" class="btn btndanger">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </table>
 
 {!! $pegawai->links() !!}
 
@endsection