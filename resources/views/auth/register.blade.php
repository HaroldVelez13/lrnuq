@extends('layouts.lrnuq')

@section('content')
<article class="row">
    <section class="col s10 m6 l4 offset-s1 offset-m3 offset-l4"> 
        <div class="card z-depth-1 hoverable">
            <div class="center card-header">
                <h1 class="card-title">Registro</h1>
            </div> 
            <div class="card-content">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="input-field col s12">
                        <input type="text" name="name" id="name"  class="validate" required autofocus>
                        <label for="name">Nombre</label>
                    </div>

                    <div class="input-field col s12">
                        <input type="email" name="email" id="email"  class="validate" required>
                        <label for="email">Correo</label>
                    </div>

                    <div class="input-field col s12">
                        <input type="password" name="password"  class="validate" id="password" required>
                        <label for="password">Contraseña</label>
                    </div>

                    <div class="input-field col s12">
                        <input type="password" name="password_confirmation" id="password-confirm" class="validate" required>
                        <label for="password-confirm">Confirmar Contraseña</label>
                    </div>

                    <div class="center">
                        <button type ='submit' class="waves-effect waves-light btn-large" >
                            Registrarme
                            <i class = 'material-icons right'>add</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>        
</article>
@endsection
