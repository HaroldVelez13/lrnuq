@extends('layouts.lrnuq')

@section('content')
<article class="row">
    <section class="col s10 m6 l4 offset-s1 offset-m3 offset-l4"> 
        <div class="card z-depth-1 hoverable">
            <div class="center card-header">
                <h1 class="card-title">Ingreso</h1>
            </div> 
            <div class="card-content">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input-field col s12">
                        <input type="email" name="email" id="email"required autofocus class="validate">
                        <label for="email">Correo</label>
                    </div>

                    <div class="input-field col s12">
                        <input type="password" name="password"  class="validate" id="password" required>
                        <label for="password">Contraseña</label>
                    </div>
                    <div class="input-field col s12">
                        <p class="right">
                            <label >
                                                               
                                <input type="checkbox" name="remember" />
                                <span>Recordarm </span>
                            </label>
                        </p>
                    </div>                       

                    <div class="center">
                        <button type ='submit' class="waves-effect waves-light btn-large" >
                            Ingresar
                            <i class = 'material-icons right'>check</i>
                        </button>
                    </div> 
                </form>
            </div>
        </div>
    </section>        
</article>
@endsection
