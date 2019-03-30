@extends('layouts.lrnuq')

@section('title', 'Información de Plantas')

@section('content')
<div class="row-breadcrumb"> 
    <nav class="row">
        <div class="nav-wrapper grey darken-4">
          <div class="col s12">

            <a  class="breadcrumb" href="{{route('users.index')}}">Lista de Usuarios</a>

            <a  class="breadcrumb" href="{{route('users.show',['user'=>$users])}}">Usuario # {{$users}}</a>

            <a  href="{{route('users.show_net',['user'=>$users,'net'=>$net])}}"class="breadcrumb breadcrumb">Red # {{$net}}</a>

            <a  class="breadcrumb breadcrumb-active">Reporte # {{$report->id}}</a>

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
    <section class="col s12 m4">
        <div class="card-panel z-depth-1 lrnuq-bg-color">
            <h4 class="center">Reporte</h4>
            <p class="divider red darken-1"></p>
            <div class="row">               
            
                <p class="net-field col s12">
                    <label for="name">
                        <small>Nombre</small> 
                    </label>
                    <span id="name"> {{$report->name}} </span>                
                </p> 

                <p class="net-field col s12">
                    <label for="type">
                        <small>Tipo</small> 
                    </label>
                    <span id="type"> {{$report->type}} </span>
                </p> 

                <p class="net-field col s12">
                    <label for="rate_learning">
                        <small>Rate Learning</small> 
                    </label>
                    <span id="rate_learning"> {{$report->rate_learning}} </span>
                </p> 

                <p class="net-field col s12">
                    <label for="itera">
                        <small>Itera</small> 
                    </label>
                    <span id="itera"> {{$report->itera}} </span>
                </p>                 
                <p class="net-field col s12 left">
                    
                    
                    <label for="plant" >
                        <small>Red</small> 
                    </label>
                    <br>
                    <br>
                    <span id="plant">  {{$report->net->name}} 
                    </span>
                    
                    
                </p> 
            </div>    
                              
        </div>          
    </section>  
    <section class="col s12 m8">
        <h4 class="center">Evidencias</h4>
        <div class="row">   
        @if(count($images))
            @foreach($images as $img)
            <div class="ccol s8 offset-s2  m-2 ">
                <img class="materialboxed responsive-img" src="{{asset('images/reports').'/'.$img->url_name}}">
            </div>                
            @endforeach()            
        @else
        <div class="card-panel col s8 offset-s-2">      
            <p>
                <strong>{{$report->name}}</strong>
                No cuenta con Evidencias 
            </p>                
        </div>
        @endif      
        </div>
                   
    </section>      
</article>

@endsection
@section('javascript')
    @parent  
    <script  >
        $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
    </script> 
@endsection 
