@extends('templates.website')
@section('content')
<center><h2>Bienvenido {{session()->get('user')->nombre}}</h2></center><br>
<center><h4>Veterinaria</h4></center><br>

<div class="row">
		<center>
		
	   <a href="/mascota" class="waves-effect   blue lighten-2 btn-large">Registrar Mascota<i class="fa fa-arrow-right"></i></a></i></a>
				
	    <a href="/logout" class="waves-effect   blue lighten-2 btn-large">Salir<i class="fa fa-arrow-right"></i></a></i></a>
		</center>
	</div>
	<center>
		<table>
		<thead>
			<tr>
				<td>Id</td>
				<td>Nombre</td>
			</tr>
		</thead>
		<tbody>
			@foreach($mascotas as $mascota)
			<tr>
			<td><a href="/mascota{{$mascota->id}}">{{$mascota->id}}</a></td>
				<td>{{$mascota->nombre}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</center>


	

@stop



