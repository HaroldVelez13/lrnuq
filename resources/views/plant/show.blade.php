@extends('layouts.lrnuq')

@section('title', 'Información de Plantas')
@section('meta')
<meta type = 'hidden' name="_token" content="{{csrf_token()}}" />
@endsection()
@section('content')
<div class="row-breadcrumb"> 
    <nav class="row">
        <div class="nav-wrapper grey darken-4">
          <div class="col s12">
            <a  class="breadcrumb" href="{{route('user.plant.index', ['user' => auth()->user()->id])}}">Lista de Plantas</a>
            <a  class="breadcrumb breadcrumb-active">Planta # {{$plant->id}}</a>
            <a href="{{route('user.plant.index', ['user' => auth()->user()->id])}}" 
                class="btn-floating btn-large halfway-fab waves-effect waves-light indigo"
                title="Volver a la lista">
            <i class="material-icons">arrow_back</i>
          </a>
          </div>
        </div>
    </nav>
</div>
<article class="row">
    <section class="col s12 m4">
        <div class="card-panel z-depth-1 lrnuq-bg-color">
            <blockquote class="black-text ">
                <h5>Planta</h5>
                <h6>{{$plant->name}}</h6>
                
            </blockquote> 
            <p >{{$plant->description}}</p>                              
        </div>          
    </section>
    <section class="col s12 m8"> 
        <a href = "{{route('user.plant.net.create', ['user' => auth()->user()->id,'plant'=>$plant->id])}}" 
                class = 'btn waves-effect waves-teal grey lighten-3 teal-text'>
            Agregar Red
            <i class = 'material-icons right '>add</i>
        </a> 
        <ul class="collection ">

            <li class="collection-item"> 
                    <h4 class="center">Redes</h4> 
            </li>
            @if(count($nets))
                @foreach($nets as $net)
                    <li class="collection-item">
                        <div class="row valign-wrapper">
                            
                            <span class="col s6">
                                <strong>Nombre: </strong>{{$net->name}}
                                <br>
                                <strong>Tipo: </strong>{{$net->type}}
                                <br>
                                <strong>Itera: </strong>{{$net->itera}}
                                
                            </span>  
                            <span class="col s6 ">
                                <a href = '#modal1' 
                                    class = 'item-btn btn-floating btn-small waves-effect waves-red  grey lighten-3 modal-trigger right'
                                    data-link="{{route('user.plant.net.destroy', ['user' => auth()->user()->id,'plant'=>$plant->id,'net'=>$net->id])}}" 
                                    onclick="modalCaller(this)">

                                    <i class = 'material-icons red-text'>delete</i>
                                </a>
                                <a href ="{{route('user.plant.net.edit', ['user' => auth()->user()->id,'plant'=>$plant->id,'net'=>$net->id])}}"
                                    class = 'item-btn btn-floating btn-small waves-effect waves-orange grey lighten-3 right' >
                                    <i class = 'material-icons orange-text'>edit</i>
                                </a>
                                <a href = "{{route('user.plant.net.show', ['user' => auth()->user()->id,'plant'=>$plant->id,'net'=>$net->id])}}" 
                                    class = 'item-btn btn-floating btn-small waves-effect waves-teal grey lighten-3 right'>
                                    <i class = 'material-icons teal-text'>info</i>
                                </a>
                            </span>
                        </div>
                    </li>
                @endforeach()            
            @else
            <li class="collection-item">                
                <p>
                    <strong>{{$plant->name}}</strong>
                    No cuenta con Redes ¿Deseas Crear una?
                </p>
                <div class="center">
                    <a href = "{{route('user.plant.net.create', ['user' => auth()->user()->id,'plant'=>$plant->id])}}" 
                            class = 'btn waves-effect waves-teal grey lighten-3 teal-text'>
                        Agregar Red
                        <i class = 'material-icons right '>add</i>
                    </a>
                </div>
            </li>
            @endif

        </ul>
                   
    </section>
</article>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>!!Te cuidado!!</h4>
        ¿Estas seguro que quieres Eliminar la Red?
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