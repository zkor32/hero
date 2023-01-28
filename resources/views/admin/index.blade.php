@extends('layouts.app')
@section('content')

    <div class="row">
    <h1>Administrador de Hero</h1>
    </div>

    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th >Entidad</th>
                    <th >Cantidad</th>
                    <th >Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($report as $cosa)
                    <tr>
                        <td>{{$cosa["name"]}}</td>
                        <td>{{$cosa["counter"]}}</td>
                        <td>
                            <a href="{{ route($cosa ["route" ] ) }}" class="{{$cosa["class"]}}">Ir a {{$cosa["name"]}} </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

           

@endsection