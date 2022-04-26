<!@extends('template')
@section('title', 'Data Reservasi')
<!--Data reservasi, edit, dan hapus data-->
@section('konten')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->
<div class="container">
    <h2> Data Reservasi </h2>
	<div class="row">
        <div class="table-responsive">                
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>Atas Nama</th>
                    <th>Hotel</th>
                    <th>Kedatangan</th>
                    <th>Keberangkatan</th>
                    <th>Jenis</th>
                </thead>
            <tbody> 
                @foreach($reservasi as $rsv)
                <tr>
                    <td>{{$rsv->Nama}}</td>
                    <td>{{$rsv->Hotel}}</td>
                    <td>{{$rsv->Kedatangan}}</td>
                    <td>{{$rsv->Keberangkatan}}</td>
                    <td>{{$rsv->Jenis}}</td>
                    <td>
                        <a href="/reservasi/edit/{{$rsv->Nama}}">Edit</a>
                        <!--<-->
                        <a style="color:red;" href="/reservasi/hapus/{{$rsv->Nama}}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </div>
    </table>
    </div>
</div>
@endsection