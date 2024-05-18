@extends('plantilla')
@section('seccion')

<h2>Carreras</h2>
<p>Estas son todas las actividades</p>

<div>
    <table class="table">

        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Distancia(Km)</th>
                <th>Duracion(min)</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carrera as $item)



            <tr>
                <th>{{$item->id}}</th>
                <th>{{$item->fecha}}</th>
                <th>{{$item->distancia_km}}</th>
                <th>{{$item->duracion_min}}</th>
                <th>
                    <form method="POST" action="{{ route('borrar_carrera_ruta', ['id' => $item->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?');">Borrar</button>
                    </form>
                </th>
            </tr>


            @endforeach

        </tbody>

    </table>
</div>
<br>
<div class=container>
    <h2 class="title">MODIFICA LOS DATOS DE LA CARRERA</h2>
    <form action="{{route('editar_carrera_ruta')}}" method="POST">

        @csrf
        @method('PUT')
        <div class="form-group row">
            <input type="hidden" name="id" value={{$item->id}}>
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