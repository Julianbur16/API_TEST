@extends('Layauts/plantilla')
@section('title','documento create')
@section('subtitle')
<h1>page create Form</h1><br>
<form action="{{route('cursos.store')}}" method="POST">
    @csrf
    <input type="text" name="Gmail" placeholder="Gmail"><br>
    <input type="submit" value="REGISTRAR">
</form>

@endsection