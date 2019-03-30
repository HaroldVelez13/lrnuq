@extends('layouts.lrnuq')

@section('title', 'Edición de Plantas')

@section('content')
    <div class="row-breadcrumb"> 
        <nav class="row">
            <div class="nav-wrapper grey darken-4">
              <div class="col s12">
                <a  class="breadcrumb" href="{{route('user.plant.index', ['user' => auth()->user()->id])}}">Lista de Plantas</a>
                <a  class="breadcrumb breadcrumb-active">Edición de Plantas</a>
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
        <section class="col s12 m8 l6 offset-m2 offset-l3"> 
            <div class="card z-depth-1 hoverable">
                <div class="center card-header">
                    <h1 class="card-title">Formulario de Edición</h1>
                </div> 

                <div class="card-content">
                    <form method = 'POST' action = "{{route('user.plant.update', ['user' => auth()->user()->id,'plant'=>$plant->id])}}">
                        @csrf
                        @method('PUT')                        
                        <div class="input-field col s12">
                            <input id="name" name = "name" type="text" class="validate" value="{{$plant->name}}">
                            <label for="name">Nombre</label>
                        </div>

                        <div class="input-field col s12">
                            <textarea id="description" name="description" class="materialize-textarea">{{$plant->description}}</textarea>
                            <label for="description">Descripción</label>
                        </div>

                        <div class="input-field col s12 ">
                            <select name = 'user_id'>
                                @foreach($users as $user)
                                    @if($user->id==$plant->user_id)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endif()
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            <label>Usuarios</label>
                        </div> 
                        <div class="center">
                            <button type ='submit' class="waves-effect waves-light orange  lighten-1 btn-large" >
                                Editar
                                <i class = 'material-icons right '>edit</i>
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
    <script> $('select').formSelect(); </script>
@endsection
