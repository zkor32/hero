@csrf
<div class="mb-3">
    <label for="name" >Nombre</label>
    <input type="text" class="form-control" id="name" name="name" @isset($item) value="{{ $item->name}}" @endisset  placeholder= "Ingrese un nombre" required>
</div>
<div class="mb-3">
    <label for="name" >HP</label>
    <input type="number" class="form-control" id="hp" name="hp" @isset($item)value="{{ $item->hp}}"  @endisset placeholder= "Ingrese puntos de vida" required>
</div>
<div class="mb-3">
    <label for="atq" >Ataque</label>
    <input type="number" class="form-control" id="atq" name="atq" @isset($item)value="{{ $item->atq}}"  @endisset placeholder="Ingreselos puntos de ataque" required>
</div>  
<div class="mb-3">
    <label for="def" >Defensa</label>
    <input type="number" class="form-control" id="def" name="def" @isset($item)value="{{ $item->def}}" @endisset placeholder= "Ingreselos puntos de defensa" required>
</div> 
<div class="mb-3">
    <label for="luck" >Suerte</label>
    <input type="number" class="form-control" id="luck" name="luck" @isset($item)value="{{ $item->luck}}"  @endisset placeholder= "Ingreselos puntos de suerte" required>
</div>
<div class="mb-3">
    <label for="cost" >Monedas</label>
    <input type="number" class="form-control" id="cost" name="cost" @isset($item)value="{{ $item->cost}}"  @endisset placeholder= "Ingrese cantidad de monedas" required >
</div>   
<div class="mb-3">
    <label for="xp" >Imagen</label>
    <input type="file"  name="img_path" id="img_path">
</div> 
         