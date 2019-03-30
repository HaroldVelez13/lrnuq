@extends('layouts.lrnuq')

@section('title', 'Lista de Plantas')

@section('meta')
<meta type = 'hidden' name="_token" content="{{csrf_token()}}" />
@endsection()

@section('content')

<div class="row-breadcrumb"> 
    <nav class="row">
        <div class="nav-wrapper grey darken-4">
          <div class="col s12">
            <a  class="breadcrumb">Lista de Plantas</a>
            @role('administrador')
            <a href="{{route('user.plant.create', ['user' => auth()->user()->id])}}" 
                class="btn-floating btn-large halfway-fab waves-effect waves-light indigo"
                title="Crear Plantas">
            <i class="material-icons">add</i>
          </a>
          @endrole
          </div>
        </div>
    </nav>
</div>
<div class="row principal-content">
@foreach($plants as $Plant)
    <div class="col s10 m4 l3">
          <div class="card small smally z-depth-1 hoverable">
            <div class="card-content">
                <blockquote class="black-text ">
                    <h6 class="truncate">{{$Plant->name}}</h6>
                    <p class="truncate">{{$Plant->description}}</p>
                </blockquote>  
            </div>
            <div class="card-action ">
                <div class = 'row right'>
                    @role('administrador')
                    <a href = '#modal1' 
                        class = 'delete btn-floating waves-effect waves-red  grey lighten-3 modal-trigger'
                        data-link="{{route('user.plant.destroy', ['user' => auth()->user()->id,'plant'=>$Plant->id])}}" 
                        onclick="modalCaller(this)">

                        <i class = 'material-icons red-text'>delete</i>
                    </a>
                    <a href ="{{route('user.plant.edit', ['user' => auth()->user()->id,'plant'=>$Plant->id])}}"
                        class = ' btn-floating waves-effect waves-orange grey lighten-3' >
                        <i class = 'material-icons orange-text'>edit</i>
                    </a>
                    @endrole
                    <a href = "{{route('user.plant.show', ['user' => auth()->user()->id,'plant'=>$Plant->id])}}" 
                        class = ' btn-floating waves-effect waves-teal grey lighten-3'>
                        <i class = 'material-icons teal-text'>info</i>
                    </a>
                </div>
            </div>
          </div>
        </div>
@endforeach()        
</div>

  

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

