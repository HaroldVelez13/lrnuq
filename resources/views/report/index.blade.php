@extends('layouts.lrnuq')

@section('title', 'Lista de Reportes')

@section('content')
    <div class = 'container'>
        <h3>Lista de Reportes</h3>
        <div class="row">
            <form class = 'col s3' method = 'get' action = '{{url("report")}}/create'>
                <button class = 'btn red' type = 'submit'>Crear  Reporte</button>
            </form>
        </div>
        <table>
            <thead>                
                <th>Nombre</th>                
                <th>Tipo</th>                
                <th>Itera</th>                
                <th>Rate Learning</th>  
                <th></th>
            </thead>
            <tbody>
                @foreach($reports as $Report)

                <tr>                    
                    <td>{{$Report->name}}</td>                   
                    <td>{{$Report->type}}</td>                   
                    <td>{{$Report->itera}}</td>                  
                    <td>{{$Report->rate_learning}}</td>
                    <td>
                        <div class = 'row'>
                            <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/report/{{$Report->id}}/deleteMsg" ><i class = 'material-icons'>Borrar</i></a>
                            <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/report/{{$Report->id}}/edit'><i class = 'material-icons'>Editar</i></a>
                            <a href = '#' class = 'viewShow btn-floating orange' data-link = '/report/{{$Report->id}}'><i class = 'material-icons'>Info</i></a>
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
    
