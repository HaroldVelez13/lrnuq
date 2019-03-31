@extends('layouts.lrnuq')

@section('title', 'Información de Plantas')

@section('content')
<div class="row-breadcrumb"> 
    <nav class="row">
        <div class="nav-wrapper grey darken-4">
          <div class="col s12">

            <a  class="breadcrumb" href="{{route('users.index')}}">Lista de Usuarios</a>

            <a  class="breadcrumb" href="{{route('users.show',['user'=>$users])}}">Usuario # {{$users}}</a>

            <a  class="breadcrumb breadcrumb-active">Red # {{$net->id}}</a>

            <a href="{{route('users.show',['user'=>$users])}}" 
                class="btn-floating btn-large halfway-fab waves-effect waves-light indigo"
                title="Volver a la lista">
            <i class="material-icons">arrow_back</i>
          </a>
          </div>
        </div>
    </nav>
</div>
<article class="row">
    <section class="col s12 m6">
        <div class="card-panel z-depth-1 lrnuq-bg-color ">
            <blockquote>
              <h4>Red</h4>
            </blockquote>
                        
            <table  class="responsive-table">
                <thead>
                  <tr >
                      <th>Nombre </th>
                      <th>Tipo</th>
                      <th>Aprender</th>
                      <th>Itera</th>
                      <th>Tiempo</th>
                      <th>Muestreo</th>
                      <th>Referencia</th>
                      <th>Planta</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>{{$net->name}} </td>
                    <td>{{$net->type}}</td>
                    <td>{{$net->rate_learning}}</td>
                    <td>{{$net->itera}}</td>
                    <td>{{$net->establishment_time}}</td>
                    <td>{{$net->sampling_time}}</td>
                    <td>{{$net->reference}}</td>
                    <td>{{$net->plant->name}}</td>
                  </tr>                  
                </tbody>
            </table> 
                              
        </div>          
    </section>   
    <section class="col s12 m6"> 
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
                                <a href="{{route('users.show_report',['users'=>$users,'net'=>$net->id,'report'=>$report->id])}}"
                                    class = 'item-btn btn-floating btn-small waves-effect waves-teal grey lighten-3 right'>
                                    <i class = 'material-icons teal-text'>info</i>
                                </a>
                            </span>
                        </div>
                    </li>
                @endforeach()            
            @else
            <li class="collection-item center">                
                <p >
                    <strong>{{$net->name}}</strong>
                    No cuenta con Reportes 
                </p>                
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
