
        @csrf
        <div class="mb-3">
            <label for="name" >Nombre de Heroe</label>
            <input type="text" class="form-control" id="name" name="name" @isset($hero) value="{{ $hero->name }}" @endisset  placeholder= "Ingrese un nombre" required>
        </div>
        <div class="mb-3">
            <label for="name" >HP</label>
            <input type="number" class="form-control" id="hp" name="hp" @isset($hero) value="{{$hero->hp}}" @endisset placeholder= "Ingrese puntos de vida" required>
        </div>
        <div class="mb-3">
            <label for="atq" >Ataque</label>
            <input type="number" class="form-control" id="atq" name="atq" @isset($hero) value="{{$hero->atq}}" @endisset placeholder= "Ingreselos puntos de ataque" required>
        </div>  
        <div class="mb-3">
            <label for="def" >Defensa</label>
            <input type="number" class="form-control" id="def" name="def" @isset($hero) value="{{$hero->def}}" @endisset placeholder= "Ingreselos puntos de defensa" required>
        </div> 
        <div class="mb-3">
            <label for="luck" >Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" @isset($hero) value="{{$hero->luck}}" @endisset placeholder= "Ingrese puntos de suerte" required >
        </div>   
        <div class="mb-3">
            <label for="coins" >Monedas</label>
            <input type="number" class="form-control" id="coins" name="coins" @isset($hero) value="{{$hero->coins}}" @endisset placeholder= "Ingrese cantidad de monedas" required >
        </div>   
        <div class="mb-3">
            <label for="xp" >Imagen</label>
            <input type="file"  name="img_path" id="img_path">
        </div> 
        
    
       
                 