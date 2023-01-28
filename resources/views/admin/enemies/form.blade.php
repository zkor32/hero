@csrf
    
<div class="mb-3">
    <label for="name" >Nombre</label>
    <input type="text" class="form-control" id="name" name="name" @isset($enemy) value="{{ $enemy->name}}" @endisset placeholder= "Ingrese un nombre" required>
</div>
<div class="mb-3">
    <label for="name" >HP</label>
    <input type="number" class="form-control" id="hp" name="hp" @isset($enemy)  value="{{ $enemy->hp}}" @endisset  placeholder= "Ingrese puntos de vida" required>
</div>
<div class="mb-3">
    <label for="atq" >Ataque</label>
    <input type="number" class="form-control" id="atq" name="atq" @isset($enemy)  value="{{ $enemy->atq}}" @endisset  placeholder="Ingrese los puntos de ataque" required>
</div>  
<div class="mb-3">
    <label for="def" >Defensa</label>
    <input type="number" class="form-control" id="def" name="def" @isset($enemy)  value="{{ $enemy->def}}"@endisset  placeholder= "Ingrese los puntos de defensa" required>
</div> 

<div class="mb-3">
    <label for="coins" >Monedas</label>
    <input type="number" class="form-control" id="coins" name="coins" @isset($enemy)  value="{{ $enemy->coins}}" @endisset  placeholder= "Ingrese cantidad de monedas" required >
</div>  
<div class="mb-3">
    <label for="xp" >Experiencia</label>
    <input type="number" class="form-control" id="xp" name="xp" @isset($enemy)  value="{{ $enemy->xp}}" @endisset  placeholder= "Ingrese los puntos de Experiencia" required>
</div> 

<div class="mb-3">
    <label for="xp" >Imagen</label>
    <input type="file"  name="img_path" id="img_path">
</div> 