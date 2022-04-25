@extends('template')
@section('title', 'Edit Data Reservasi')

@section('konten')
<img src="/img/lamp.png" style="float:right"; width="500">
<br>
    @foreach($reservasi as $rsv)
        <form action="/reservasi/update" method ="post">
            {{csrf_field()}}
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Atas nama &nbsp; &nbsp; &nbsp;  <input type=text, name="Nama", required="required", value="{{$rsv->Nama}}">
            Hotel  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type=text, name="Hotel", required="required", value="{{$rsv->Hotel}}"></br><br>
            &nbsp; &nbsp; &nbsp; &nbsp;Kedatangan &nbsp; &nbsp; &nbsp;<input type=text, name="Kedatangan", required="required", value="{{$rsv->Kedatangan}}">
            Keberangkatan &nbsp; &nbsp; &nbsp;<input type=text, name="Keberangkatan", required="required", value="{{$rsv->Keberangkatan}}"></br><br>
            &nbsp; &nbsp; &nbsp; &nbsp; Jenis &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type=text, name="Jenis", required="required",  value="{{$rsv->Jenis}}"></br><br>
            &nbsp; &nbsp; &nbsp;<input type="submit" value="Simpan Data" style="color:blue">
        </form>
    @endforeach
@endsection
</br>