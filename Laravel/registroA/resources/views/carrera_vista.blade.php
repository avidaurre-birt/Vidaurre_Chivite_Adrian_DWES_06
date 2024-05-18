@extends('plantilla')
@section('seccion')
<br>
<h2>Carreras</h2>
<p>Este es el registro de todas las carreras realizadas</p>

<div>
    <table class="table">

        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Distancia(Km)</th>
                <th>Duracion(min)</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tablacarreras as $item)

            <tr>
                <th>{{$item->id}}</th>
                <th>{{$item->fecha}}</th>
                <th>{{$item->distancia_km}}</th>
                <th>{{$item->duracion_min}}</th>
                <th><a href="{{route('carrerabyid_ruta', ['id'=>$item->id]) }}" class="btn btn-secondary">Editar</a></th>
            </tr>

            @endforeach

        </tbody>

    </table>
</div>
<div class=container>
    <h2 class="title">Registrar una nueva carrera</h2>
    <form action="{{route('guardar_carrera_ruta')}}" method="POST">

        @csrf {{--justo aqui--}}
        <div class="form-group row">
            <label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha de la actividad">
            </div>
        </div>

        <div class="form-group row">
            <label for="distancia" class="col-sm-2 col-form-label">Distancia (Km)</label>
            <div class="col-sm-10">
                <input type="decimal" class="form-control" id="distancia" name="distancia" placeholder="Distancia recorrida">
            </div>
        </div>
        <div class="form-group row">
            <label for="duracion" class="col-sm-2 col-form-label">Duracion (min)</label>
            <div class="col-sm-10">
                <input type="decimal" class="form-control" id="duracion" name="duracion" placeholder="Duracion de la actividad">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
</div>


@endsection