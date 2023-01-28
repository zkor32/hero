@extends('layouts.app')
@section('content')
    <DIV class="ROW">
      <h1>Lista de Items</h1>
    </DIV>

      <div class="row">
      <DIV class="COL">
        <a href="{{route('items.create')}}" class="btn btn-primary mb-2 mt-2">Ir a Crear Item</a>
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
        <th scope="col">Valor</th>
        <th scope="col">Acciones</th>


      </tr>
    </thead>
    <tbody>
      @foreach ($items as $item)
          <tr>
              <th scope="row">{{ $item->id }}</th>
              <td>{{ $item->name }}</td>
              <td>{{ $item->hp }}</td>
              <td>{{ $item->atq }}</td>
              <td>{{ $item->def }}</td>
              <td>{{ $item->luck }}</td>
              <td>{{ $item->cost }}</td>
              <td>
              <div class="row">
                <div class="col">
                  <a href="{{ route('items.edit', ['item' => $item->id]) }}" class="btn btn-warning">Modificar</a>
                </div>
                <div class="col">
             <!-- Button trigger modal -->
             <button type="button" id="btnmodal" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $item['id']; ?>" data-hid="{{ $item->id }}">
                            Borrar
                          </button>

        
                </div>
              </div>            

              </td>
                      <script >
                                      $(document).on("click", "#btnmodal",function () {
                                        
                                              var itemid =$(this).data('hid');
                                         

                                        $("#itemid").val(itemid);
                                        


                                        
                                      });





                    </script>
 


      
                  <!-- Modal -->
                 
                  <div class="modal fade" id="exampleModal<?php echo $item['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">¡Atención!</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <?php    
                                
                                            
                                            $mid = ($item['id']);
                                            $mname = ($item['name']);
                                          
                                            //echo "The variable  has converted to a number and its value is $mname.";  
                                            //echo "\n";
                                            ?>
                                  

                                            
                                            


                                  ¿Estás seguro de borrar el Item <?php echo "<b>$mname</b>"; ?>?
                                  <!--<label>nombre  : </label><input type="text" id="itemid" name="" > <br></label>
                                </div>
                                    -->
                                
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                
                                  <form action="{{ route('items.destroy', $mid) }}" method= "POST">
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