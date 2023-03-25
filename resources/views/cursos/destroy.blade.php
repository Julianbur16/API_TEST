@extends('Layauts.plantilla')
@section('title','destroy')

@section('subtitle')
<h1>Esta seguro de eliminar el registro ?</h1>
<form action="cursos.store2" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$curso->id}}">
    <input type="submit" value="Eliminar">
</form>
@endsection