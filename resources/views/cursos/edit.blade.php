@extends('Layauts/plantilla')
@section('title','edit')

@section('subtitle')
<h1>Editar correo</h1><br>
<form action="cursos.store1" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$curso->id}}">
    <input type="text" value="{{$curso->Gmail}}" name="gmail"><br>
    <input type="submit" value="Guardar">
</form>
@endsection