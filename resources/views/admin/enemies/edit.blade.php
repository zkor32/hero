@extends('layouts.app')
@section('content')
<h1>Editar Enemigo : {{$enemy->name}}</h1>
    <form action="{{route('enemies.update',['enemy' =>$enemy->id])}}" method="post" enctype="multipart/form-data">
    @method('PUT')
            @include('admin.enemies.form')
          <button type="submit" class="btn btn-primary">Editar</button>
                 
    </form>
@endsection|