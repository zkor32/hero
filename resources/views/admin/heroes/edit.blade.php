@extends('layouts.app')
@section('content')
<h1>Editar Heroe</h1>
    <form action="{{route('heroes.update',['hero' =>$hero->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" >Editar Heroe</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $hero->name}}" placeholder= "Ingrese un nombre" required>
        </div>
        <div class="mb-3">
            <label for="name" >HP</label>
            <input type="number" class="form-control" id="hp" name="hp" value="{{ $hero->hp}}"  placeholder= "Ingrese puntos de vida" required>
        </div>
        <div class="mb-3">
            <label for="atq" >Ataque</label>
            <input type="number" class="form-control" id="atq" name="atq" value="{{ $hero->atq}}"  placeholder="Ingreselos puntos de ataque" required>
        </div>  
        <div class="mb-3">
            <label for="def" >Defensa</label>
            <input type="number" class="form-control" id="def" name="def" value="{{ $hero->def}}" placeholder= "Ingreselos puntos de defensa" required>
        </div> 
        <div class="mb-3">
            <label for="luck" >Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" value="{{ $hero->luck}}"  placeholder= "Ingreselos puntos de suerte" required>
        </div>
        <div class="mb-3">
            <label for="coins" >Monedas</label>
            <input type="number" class="form-control" id="coins" name="coins" value="{{ $hero->coins}}"  placeholder= "Ingrese cantidad de monedas" required >
        </div>   
        <button type="submit" class="btn btn-primary">Editar</button>
                 
    </form>
@endsection