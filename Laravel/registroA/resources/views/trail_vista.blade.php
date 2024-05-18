@extends('plantilla')
@section('seccion')
<br>
<h2>Trails</h2>
<h4>Ofrecido por SpringBoot</h4>
<p>Este es el registro de todas las carreras de montaña</p>

<div>
    <table class="table">

        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Distancia(Km)</th>
                <th>Duracion(min)</th>
                <th>Desnivel positivo (m)</th>
                <th>Ritmo (min/Km)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trails as $item)

            <tr>
                <th>{{$item['id']}}</th>
                <th>{{$item['fecha']}}</th>
                <th>{{$item['distanciaKm']}}</th>
                <th>{{$item['tiempoMin']}}</th>
                <th>{{$item['desnivelPositivoM']}}</th>
                <th>{{$item['ritmoMinKm']}}</th>
            </tr>

            @endforeach

        </tbody>

    </table>
</div>


@endsection