@extends('layouts.app')
@section('content')
<h1>Crear nuevo Heroe</h1>
    <form action="{{route('heroes.store')}}" method="post" enctype="multipart/form-data">
        @csrf
       @include('admin.heroes.form')
        <button type="submit" class="btn btn-primary">Crear</button>
                 
    </form>
@endsection