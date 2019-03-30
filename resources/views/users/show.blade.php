@extends('layouts.lrnuq')

@section('title', 'Ifon Usuario')

@section('meta')

@endsection()

@section('content')
<div class="row-breadcrumb"> 
    <nav class="row">
        <div class="nav-wrapper grey darken-4">
          <div class="col s12">
            <a  class="breadcrumb" href="{{route('users.index')}}">Lista de Usuarios</a>
            <a  class="breadcrumb breadcrumb-active">Usuario # {{$users->id}}</a>
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
    <section class="col s12 m4">
        <div class="card-panel z-depth-1 lrnuq-bg-color">
            <h4 class="center">Usuario</h4>
            <p class="divider red darken-1"></p>
            <div class="row">              
            
                <p class="net-field col s12">
                    <label for="name">
                        <small>Nombre</small> 
                    </label>
                    <span id="name"> {{$users->name}} </span>                
                </p> 

                <p class="net-field col s12">
                    <label for="email">
                        <small>Correo</small> 
                    </label>
                    <span id="email"> {{$users->email}} </span>
                </p> 

                <p class="net-field col s12">
                    <label for="role">
                        <small>Rol</small> 
                    </label>
                    <span id="role"> {{$users->roles->first()->name}} </span>
                </p>
            </div>    
                              
        </div>          
    </section>

    <section class="col s12 m8"> 
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
                                 <br>
                                <strong>
                                    Rate Learning: 
                                </strong>{{$net->rate_learning}}
                                <br>
                                <strong>
                                    Planta: 
                                </strong>{{$net->plant->name}}

                                
                                
                            </span>  
                            <span class="col s6 ">                
                                <a href = "{{route('users.show_net',['users'=>$users->id,'net'=>$net->id])}}" 
                                    class = 'item-btn btn-floating btn-small waves-effect waves-teal grey lighten-3 right'>
                                    <i class = 'material-icons teal-text'>info</i>
                                </a>
                            </span>
                        </div>
                    </li>
                @endforeach()            
            @else
            <li class="collection-item center">                
                <p>Usuario sin redes
                </p>               
            </li>
            @endif

        </ul>
                   
    </section>
</article>     
@endsection

@section('javascript')
    @parent
 
@endsection  
