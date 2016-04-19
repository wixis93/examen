@extends('templates.website')
@section('content')
<center><h2>Detalle de {{$mascota->nombre}}</h2></center>

<center>
id-->{{$mascota->id}}<br>
nombre-->{{$mascota->nombre}}<br>
edad-->{{$mascota->edad}}<br>
tipo-->{{$mascota->tipo}}<br>
color-->{{$mascota->color}}<br>

</center>

<a href="{{$back}}" class="waves-effect   blue lighten-2 btn-large">regresar</a></i></a>


@stop