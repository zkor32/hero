@extends('layouts.app')
@section('content')
<h1>Editar Item : {{ $item->name }}</h1>
    <form action="{{route('items.update',['item' =>$item->id])}}" method="post" enctype="multipart/form-data">
        @method('PUT')

        @include('admin.items.form')
        <button type="submit" class="btn btn-primary">Editar</button>
       
                 
    </form>
@endsection