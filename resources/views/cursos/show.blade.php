@extends('Layauts/plantilla')
@section('title','documento show')
@section('subtitle')
<h1>El correo electronico es:  {{$curso->Gmail}}</h1>
<h2>El id de este correo es: {{$curso->id}}</h2>
<h2><a href="{{route('cursos.index')}}">Volver a los cursos</a></h2>
<h2><a href="{{route('cursos.edit',$curso->id)}}">Editar curso</a></h2>
<h2><a href="{{route('cursos.destroy',$curso->id)}}">Eliminar curso</a></h2>
@endsection