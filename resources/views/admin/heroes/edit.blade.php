@extends('layouts.app')
@section('content')
<h1>Editar Heroe : {{$hero->name}}</h1>
    <form action="{{route('heroes.update',['hero' =>$hero->id])}}" method="post" enctype="multipart/form-data">
    @method('PUT')  
    @include('admin.heroes.form')
  
        <button type="submit" class="btn btn-primary">Editar</button>
                 
    </form>
@endsection