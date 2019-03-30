@extends('layouts.lrnuq')

@section('title', 'Lista de Usuarios')

@section('meta')
<meta type = 'hidden' name="_token" content="{{csrf_token()}}" />
@endsection()

@section('content')

<div class="row-breadcrumb"> 
    <nav class="row">
        <div class="nav-wrapper grey darken-4">
          <div class="col s12">
            <a  class="breadcrumb">Lista de Usuarios</a>
            @role('administrador')
            <a href="{{route('users.create')}}" 
                class="btn-floating btn-large halfway-fab waves-effect waves-light indigo"
                title="Crear Usuario">
            <i class="material-icons">add</i>
          </a>
          @endrole
          </div>
        </div>
    </nav>
</div>
<article class="row">
	@foreach($users as $user)
    @if($user->id != auth()->user()->id)
      <section class="col s12 m4 l3">
      	<div class="card small z-depth-1 hoverable">     		
      	
	        <div class="card-content ">
	          <span class="card-title">{{$user->name}}</span>
	          <h6>{{$user->email}}</h6>
	          <p>{{$user->roles->first()->name}}</p>
	        </div>
	        <div class="card-action">
	          <div class="row center">
	          	<a href = '#modal1' class = ' btn-small btn-floating modal-trigger red' data-link="{{route('users.destroy', ['users'=>$user->id])}}" 
                        onclick="modalCaller(this)" >
	            	<i class = 'material-icons'>delete</i>
	            </a>

	            <a  href="{{route('users.edit', ['users'=>$user->id])}}" class = 'btn-small btn-floating orange' >
	            	<i class = 'material-icons'>edit</i>
	            </a>

	            <a href="{{route('users.show', ['users'=>$user->id])}}" class = ' btn-small btn-floating teal' >
	            	<i class = 'material-icons'>info</i>
	            </a>
	          </div>
	        </div>
		</div>		
    </section>
    @endif()
    @endforeach
</article>

<div id="modal1" class="modal">
<div class="modal-content">
    <h4>!!Te cuidado!!</h4>
    ¿Estas seguro que quieres Eliminar esto?
    <div class="modal-footer">
        <a href = "#" class="closeModal modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
        <a href = "#" class="waves-effect waves-green btn-flat"
            onclick="delete_item()">Eliminar</a>
    </div>
</div>
</div>
@endsection

@section('javascript')
    @parent    
    <script src="{{ asset('js/plant_index.js') }}" ></script>
 
@endsection  
