@extends('layouts.lrnuq')

@section('title', 'Lista Redes')

@section('content')
    <div class = 'container'>
        <h3>Lista de Redes</h3>
        <div class="row">
            <form class = 'col s3' method = 'get' action = '{{url("net")}}/create'>
                <button class = 'btn red' type = 'submit'>Crear Red</button>
            </form>
        </div>
        <table>
            <thead>                
                <th>Nombre</th>                
                <th>Tipo</th>                
                <th>Rate Learning</th>                
                <th>Itera</th>                
                <th>Numero de Capas</th>                
                <th>Tiempo de Establecimiento</th>                
                <th>Tiempo de Muestreo</th>                
                <th>Referencia</th>  
                <th></th>
            </thead>
            <tbody>
                @foreach($nets as $Net)
                <tr>                    
                    <td>{{$Net->name}}</td>                    
                    <td>{{$Net->type}}</td>                    
                    <td>{{$Net->rate_learning}}</td>                    
                    <td>{{$Net->itera}}</td>                    
                    <td>{{$Net->number_layers}}</td>                    
                    <td>{{$Net->establishment_time}}</td>                   
                    <td>{{$Net->sampling_time}}</td>                    
                    <td>{{$Net->reference}}</td> 
                    <td>
                        <div class = 'row'>
                            <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/net/{{$Net->id}}/deleteMsg" ><i class = 'material-icons'>Borrar</i></a>
                            <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/net/{{$Net->id}}/edit'><i class = 'material-icons'>Editar</i></a>
                            <a href = '#' class = 'viewShow btn-floating orange' data-link = '/net/{{$Net->id}}'><i class = 'material-icons'>Info</i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="modal1" class="modal">
        <div class = "row AjaxisModal">
        </div>
    </div>
@endsection

@section('javascript')
    @parent
    <script> var baseURL = "{{URL::to('/')}}"</script>
    <script src = "{{ URL::asset('js/AjaxisMaterialize.js')}}"></script>
    <script src = "{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>
@endsection  

