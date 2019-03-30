@extends('layouts.lrnuq')

@section('title', 'Creación de Plantas')

@section('content')
<div class="row-breadcrumb"> 
    <nav class="row">
        <div class="nav-wrapper grey darken-4">
          <div class="col s12">
            <a  class="breadcrumb" href="{{route('users.index')}}">Lista de Usuarios</a>
            <a  class="breadcrumb breadcrumb-active">Edición de Usuario</a>
            <a href="{{route('users.index')}}" 
                class="btn-floating btn-large halfway-fab waves-effect waves-light indigo"
                title="Volver a la lista">
            <i class="material-icons">arrow_back</i>
          </a>
          </div>
        </div>
    </nav>
</div>
<article class="row">
    <section class="col s12 m6 l4 offset-m3 offset-l4"> 
        <div class="card z-depth-1 hoverable">
            <div class="center card-header">
                <h1 class="card-title">Crear Usuario</h1>
            </div> 

            <div class="card-content">
			<form action = "{{route('users.update', ['users'=>$user->id])}}"  method = "post">
				@csrf
				@method('PUT')
                <div class="input-field col s12">
                    <input type="text" name="name" value="{{$user->name}}" id="name"  class="validate" required autofocus>
                    <label for="name">Nombre</label>
                </div>

                <div class="input-field col s12">
                    <input type="email" name="email" value="{{$user->email}}" id="email"  class="validate" required>
                    <label for="email">Correo</label>
                </div>

                <div class="input-field col s12">
                    <input type="password" name="password" value="" class="validate" id="password" >
                    <label for="password">Contraseña</label>
                </div>

                 <div class="input-field col s12">
				    <select name="role">
				      <option value="{{$user->roles->first()->name}}"  disabled selected>{{$user->roles->first()->name}}</option>
				      @foreach($roles as $role)
				      <option value="{{$role->name}}">{{$role->name}}</option>
				      @endforeach()
				    </select>
				    <label>Rol</label>
				  </div>

                <div class="center">
                    <button type ='submit' class="waves-effect waves-light btn-large orange" >
                        Editar
                        <i class = 'material-icons right'>edit</i>
                    </button>
                </div>
			</form>
</div>
        </div>
    </section>        
</article>
@endsection
@section('javascript')
    @parent    
    <script>
	$(document).ready(function(){
    $('select').formSelect();
  });
</script> 
@endsection 
