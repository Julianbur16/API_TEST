@extends('Layauts/plantilla')
@section('title','documento index')
@section('subtitle')
<h1> los Registros son:</h1><br>
<h2><a href="{{route('cursos.create')}}">Crear un Gmail</a></h2><br>
<table border="1">
    <tr>
        <th>id</th>
        <th>Gmail</th>
    </tr>
    <?php
    if($registros != null){
        foreach ($registros as $registro) {
            ?>
    <tr>
        <td>{{$registro->id}}</td>
        <td><a href="{{route('cursos.show',$registro->id)}}">{{$registro->Gmail}}</a></td>
    </tr>
    <?php
        }
    }
    ?>
</table><br>


{{ $registros->links() }}
@endsection