@extends('layouts.app')
@section('content')
<h1>Crear nuevo Heroe</h1>
    <form action="{{route('heroes.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" >Nombre de Heroe</label>
            <input type="text" class="form-control" id="name" name="name" placeholder= "Ingrese un nombre" required>
        </div>
        <div class="mb-3">
            <label for="name" >HP</label>
            <input type="number" class="form-control" id="hp" name="hp" placeholder= "Ingrese puntos de vida" required>
        </div>
        <div class="mb-3">
            <label for="atq" >Ataque</label>
            <input type="number" class="form-control" id="atq" name="atq" placeholder= "Ingreselos puntos de ataque" required>
        </div>  
        <div class="mb-3">
            <label for="def" >Defensa</label>
            <input type="number" class="form-control" id="def" name="def" placeholder= "Ingreselos puntos de defensa" required>
        </div> 
        <div class="mb-3">
            <label for="luck" >Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" placeholder= "Ingreselos puntos de suerte" required>
        </div>
        <div class="mb-3">
            <label for="coins" >Monedas</label>
            <input type="number" class="form-control" id="coins" name="coins" placeholder= "Ingrese cantidad de monedas" required >
        </div>   
        <button type="submit" class="btn btn-primary">Crear</button>
                 
    </form>
@endsection