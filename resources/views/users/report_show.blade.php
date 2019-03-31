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

            <a href="{{route('users.show_net',['user'=>$users,'net'=>$net])}}" 
                class="btn-floating btn-large halfway-fab waves-effect waves-light indigo"
                title="Volver a la lista">
            <i class="material-icons">arrow_back</i>
          </a>
          </div>
        </div>
    </nav>
</div>
<article>
    
    <section class="card large z-depth-1 ">
        <blockquote >    
            <h4 >Reporte</h4>
        </blockquote>
        <table class="striped centered">
            <thead>
              <tr>
                  <th>Nombre</th>
                  <th>Tipo</th>
                  <th>Rate Learning</th>
                  <th>Itera</th>
                  <th>Red</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>{{$report->name}}</td>
                <td>{{$report->type}}</td>
                <td>{{$report->rate_learning}}</td>
                <td>{{$report->itera}}</td>
                <td>{{$report->net->name}}</td>
              </tr>          
            </tbody>
        </table>             
        @if(count($images))
            <div class="carousel"> 
                @foreach($images as $img)
                <a class="carousel-item" href="#{{$img->url_name}}">
                    <img class="materialboxed responsive-img" src="{{asset('images/reports').'/'.$img->url_name}}">
                </a>               
                @endforeach()
            </div>            
        @else                     
            <<h4 class="center"> No cuenta con Evidencias </4>               
            
        @endif 
    </section>       
</article>

@endsection
@section('javascript')
    @parent  
    <script  >
        $(document).ready(function(){
            $('.materialboxed').materialbox();
            $('.carousel').carousel();
  
        });
    </script> 
@endsection 
