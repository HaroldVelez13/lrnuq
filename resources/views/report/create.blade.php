@extends('layouts.lrnuq')

@section('title', 'Creación de Reportes')

@section('content')
<div class="row-breadcrumb"> 
    <nav class="row">
        <div class="nav-wrapper grey darken-4">
          <div class="col s12">

            <a  class="breadcrumb" href="{{route('user.plant.index', ['user' => auth()->user()->id])}}">Lista de Plantas</a>

            <a  class="breadcrumb" href="{{route('user.plant.show', ['user' => auth()->user()->id,'plant'=>$plant])}}">Planta # {{$plant}}</a>

            <a  class="breadcrumb "href="{{route('user.plant.net.show', ['user' => auth()->user()->id,'plant'=>$plant,'net'=>$net])}}" >Red # {{$net}}</a>

            <a  class="breadcrumb breadcrumb-active" >Creación de Reportes</a>

            <a href="{{route('user.plant.net.show', ['user' => auth()->user()->id,'plant'=>$plant,'net'=>$net])}}" 
                class="btn-floating btn-large halfway-fab waves-effect waves-light indigo"
                title="Volver a la lista">
                <i class="material-icons">arrow_back</i>
            </a>

          </div>
        </div>
    </nav>
</div>    
<article class="row">
    <section class="col s12 m8 l6 offset-m2 offset-l3"> 
        <div class="card z-depth-1 hoverable">
            <div class="center card-header">
                <h1 class="card-title">Formulario de Creación</h1>
            </div> 
            <div class="card-content">
                <form method = 'POST' action = "{{route('user.plant.net.report.store', ['user' => auth()->user()->id,'plant'=>$plant,'net'=>$net])}}">
                    @csrf 
                    
                    <div class="input-field col s6">
                        <input id="name" name = "name" type="text" class="validate">
                        <label for="name">Nombre</label>
                    </div>
                    
                    <div class="input-field col s6">
                        <input id="type" name = "type" type="text" class="validate">
                        <label for="type">Tipo</label>
                    </div>
                    
                    <div class="input-field col s6">
                        <input id="itera" name = "itera" type="text" class="validate">
                        <label for="itera">Itera</label>
                    </div>
                    
                    <div class="input-field col s6">
                        <input id="rate_learning" name = "rate_learning" type="text" class="validate">
                        <label for="rate_learning">Rate Learning</label>
                    </div>           

                    
                    <div class="center">
                        <button type ='submit' class="waves-effect waves-light btn-large" >
                            Crear
                            <i class = 'material-icons right'>add</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>        
</article>
@endsection


