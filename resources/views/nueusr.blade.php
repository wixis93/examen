@extends('templates.website')
@section('content')
 <div class="card-panel">
 <div class="col m5">
            <h2 class="center-align">Registrate</h2>
            <div class="row">
                <form class="col s12" action="/registro" method="POST">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="nombre">
                            <label><i class="fa fa-user"></i>&nbsp Nombre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="email" class="validate" name="email">
                            <label><i class="fa fa-envelope"></i>&nbsp Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="pass" type="password" class="validate" name="password">
                            <label for="pass"><i class="fa fa-key"></i>&nbsp Password</label>
                        </div>
                    </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col m12">
                            <p class="right-align">
                             <a href="/" class="waves-effect   blue lighten-2 btn-large">regresar</a></i></a>
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