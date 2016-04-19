@extends('templates.website')
@section('content')

 <div class="card-panel">
 <div class="col m5">
            <h2 class="center-align">Nueva Mascota</h2>
            @if(Session::has('exito'))
              <center><p class="exito">Mascota ingresada correctamente!!</p></center>
            @endif
            <div class="row">
                <form class="col s12" action="/regmas" method="POST">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="nombre">
                            <label><i class="fa fa-user"></i>&nbsp Nombre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="edad">
                            <label>edad</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="tipo">
                            <label>tipo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="color">
                            <label>color</label>
                        </div>
                    </div>
                   
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col m12">
                            <p class="right-align">
                             <a href="/index" class="waves-effect   blue lighten-2 btn-large">regresar</a></i></a>
                                <button class="btn waves-effect waves-light" type="submit" name="action">Registrar &nbsp<i class="fa fa-arrow-right"></i>
 	 							</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>    

@stop