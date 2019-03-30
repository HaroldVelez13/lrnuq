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

            <a  class="breadcrumb" href="{{route('user.plant.show', ['user' => auth()->user()->id,'plant'=>$plant])}}">Planta # {{$plant}}</a>

            <a  class="breadcrumb breadcrumb-active">Red # {{$net->id}}</a>

            <a href="{{route('user.plant.show', ['user' => auth()->user()->id,'plant'=>$plant])}}" 
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
            <h4 class="center">Red</h4>
            <p class="divider red darken-1"></p>
            <div class="row">               
            
                <p class="net-field col s12">
                    <label for="name">
                        <small>Nombre</small> 
                    </label>
                    <span id="name"> {{$net->name}} </span>                
                </p> 

                <p class="net-field col s12">
                    <label for="type">
                        <small>Tipo</small> 
                    </label>
                    <span id="type"> {{$net->type}} </span>
                </p> 

                <p class="net-field col s12">
                    <label for="rate_learning">
                        <small>Rate Learning</small> 
                    </label>
                    <span id="rate_learning"> {{$net->rate_learning}} </span>
                </p> 

                <p class="net-field col s12">
                    <label for="itera">
                        <small>Itera</small> 
                    </label>
                    <span id="itera"> {{$net->itera}} </span>
                </p> 

                <p class="net-field col s12">
                    <label for="establishment_time">
                        <small>Establishment Time</small> 
                    </label>
                    <span id="establishment_time"> {{$net->establishment_time}} </span>
                </p>

                <p class="net-field col s12">
                    <label for="sampling_time">
                        <small>Sampling Time</small> 
                    </label>
                    <span id="sampling_time"> {{$net->sampling_time}} </span>
                </p>

                <p class="net-field col s12">
                    <label for="reference">
                        <small>Referencia</small> 
                    </label>
                    <span id="reference"> {{$net->reference}} </span>
                </p> 
            </div>    
                              
        </div>          
    </section>  
    <section class="col s12 m8"> 
        <a href = "{{route('user.plant.net.report.create', ['user' => auth()->user()->id,'plant'=>$plant,'net'=>$net])}}"  
                class = 'btn waves-effect waves-teal grey lighten-3 teal-text'>
            Agregar Reporte
            <i class = 'material-icons right '>add</i>
        </a> 
        <ul class="collection ">

            <li class="collection-item"> 
                    <h4 class="center">Reportes</h4> 
            </li>
            @if(count($reports))
                @foreach($reports as $report)
                    <li class="collection-item">
                        <div class="row valign-wrapper">
                            
                            <span class="col s6">
                                <strong>Nombre: </strong>{{$report->name}}
                                <br>
                                <strong>Tipo: </strong>{{$report->type}}
                                <br>
                                <strong>Itera: </strong>{{$report->itera}}
                                 <br>
                                <strong>
                                    Rate Learning: 
                                </strong>{{$report->rate_learning}}

                                
                                
                            </span>  
                            <span class="col s6 ">
                                <a href = '#modal1' 
                                    class = 'item-btn btn-floating btn-small waves-effect waves-red  grey lighten-3 modal-trigger right'
                                    data-link="{{route('user.plant.net.report.destroy', ['user' => auth()->user()->id,'plant'=>$plant,'net'=>$net->id,'report'=>$report->id])}}" 
                                    onclick="modalCaller(this)">

                                    <i class = 'material-icons red-text'>delete</i>
                                </a>
                                <a href="{{route('user.plant.net.report.edit', ['user' => auth()->user()->id,'plant'=>$plant,'net'=>$net,'report'=>$report])}}" 
                                    class = 'item-btn btn-floating btn-small waves-effect waves-orange grey lighten-3 right' >
                                    <i class = 'material-icons orange-text'>edit</i>
                                </a>
                                <a href = "#" 
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
                    <strong>{{$net->name}}</strong>
                    No cuenta con Reportes ¿Deseas Crear uno?
                </p>
                <div class="center">
                    <a href = "#" 
                            class = 'btn waves-effect waves-teal grey lighten-3 teal-text'>
                        Agregar Reporte
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
        ¿Estas seguro que quieres Eliminar el Reporte?
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
