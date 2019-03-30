@extends('layouts.lrnuq')

@section('title', 'Informacón de Reporte')

@section('content')
    <div class = 'container'>
        <h3>Informacón de Reporte</h3>
        <form method = 'get' action = '{{url("report")}}'>
            <button class = 'btn blue'>Lista Reportes</button>
        </form>
        <table class = 'highlight bordered'>
            <thead>
                <th>Llave</th>
                <th>Valor</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <b><i>Nombre : </i></b>
                    </td>
                    <td>{{$report->name}}</td>
                </tr>                
                <tr>
                    <td>
                        <b><i>Tipo : </i></b>
                    </td>
                    <td>{{$report->type}}</td>
                </tr>                
                <tr>
                    <td>
                        <b><i>Itera : </i></b>
                    </td>
                    <td>{{$report->itera}}</td>
                </tr>                
                <tr>
                    <td>
                        <b><i>Rate Learning : </i></b>
                    </td>
                    <td>{{$report->rate_learning}}</td>
                </tr>  
            </tbody>
        </table>
    </div>
@endsection 