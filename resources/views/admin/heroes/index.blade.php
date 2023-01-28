@extends('layouts.app')
@section('content')
    <DIV class="ROW">
      <h1>Lista de Heroes</h1>
    </DIV>

      <div class="row">
      <DIV class="COL">
        <a href="{{route('heroes.create')}}" class="btn btn-primary mb-2 mt-2">Ir a Crear Heroe</a>
      </DIV>
    
    </div>

    <div class="row">

    <table class="table table-hover">
      <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">HP</th>
        <th scope="col">Ataque</th>
        <th scope="col">Defensa</th>
        <th scope="col">Suerte</th>
        <th scope="col">Monedas</th>
        <th scope="col">Experiencia</th>
        <th scope="col">Acciones</th>


      </tr>
    </thead>
    <tbody>
      @foreach ($heroes as $hero)
          <tr>
              <th>{{ $hero->id }}</th>
              <td>{{ $hero->name }}</td>
              <td>{{ $hero->hp }}</td>
              <td>{{ $hero->atq }}</td>
              <td>{{ $hero->def }}</td>
              <td>{{ $hero->luck }}</td>
              <td>{{ $hero->coins }}</td>
              <td>{{ $hero->xp }}</td>
            

              <td>
              <div class="row">
                <div class="col">
                  <a href="{{ route('heroes.edit', ['hero' => $hero->id]) }}" class="btn btn-warning">Modificar</a>
                </div>
                <div class="col">

                                                <!-- Button trigger modal -->
                          <button type="button" id="btnmodal" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $hero['id']; ?>" data-hid="{{ $hero->id }}">
                            Borrar
                          </button>

        
                </div>
              </div>            

              </td>
                      <script >
                                      $(document).on("click", "#btnmodal",function () {
                                        
                                              var heroid =$(this).data('hid');
                                         

                                        $("#heroid").val(heroid);
                                        


                                        
                                      });





                    </script>
 


      
                  <!-- Modal -->
                 
                  <div class="modal fade" id="exampleModal<?php echo $hero['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">¡Atención!</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <?php    
                                
                                            
                                            $mid = ($hero['id']);
                                            $mname = ($hero['name']);
                                          
                                            //echo "The variable  has converted to a number and its value is $mname.";  
                                            //echo "\n";
                                            ?>
                                  

                                            
                                            


                                  ¿Estás seguro de borrar a el héroe <?php echo "<b>$mname</b>"; ?>?.
                                  <!--<label>nombre  : </label><input type="text" id="heroid" name="" > <br></label>
                                </div>
                                    -->
                                
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                
                                  <form action="{{ route('heroes.destroy', $mid) }}" method= "POST">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger">Borrar</button>
                               
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                               @endforeach
                    

  
</div>

    </tbody>
    </table>
    </div>

@endsection