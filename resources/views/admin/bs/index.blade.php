@extends('layouts.app')
@section('content')

    <DIV class="ROW">
        <h1>Sistema de Batalla</h1>
    </DIV>

    <Div class= "row text-center text-white mt-2">
        <div class="col-5 bg-primary">
            <h2>Heroe {{$heroName}} </h2>
        </div>
        <div class="col-2 bg-warning">
            <h2>vs</h2>

        </div>
        <div class="col-5 bg-danger">
            <h2>Enemigo {{$enemyName}}</h2>
            <h2> </h2>
        </div>
    

    </Div>
  
    <Div class= "row text-center text-white mt-2">
        <div class="col-5 bg-primary">
            <img src="{{asset('images/heroes/' . $heroAvatar) }}"  width="100" height="100">
        </div>
        <div class="col-2 bg-warning">
            <h2>vs</h2>

        </div>
        <div class="col-5 bg-danger">         
            <img src="{{asset( 'images/enemies/' . $enemyAvatar) }}" width="100" height="100">
        </div>
    

    </Div>
    <div class="row text-center text-white mt-2">
        <div class="col bg-info ">
            <h2>
                Eventos de batalla
            </h2>
        </div>
    </div>

    <DIV class="mt-3">
        @foreach ($events as $ev)
        
            
            <div class="alert @if($ev["winner"] == "Hero") alert-success" class="alert  @else alert-danger @endif"  role="alert">
                {{$ev["text"]}}
            </div>


        @endforeach


    </DIV> 



@endsection