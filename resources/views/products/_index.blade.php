
<div class="modelPage">

<div class="text-right py-2">
   <a class="btn btn-success" href="{{ route('productos.create') }}"> Agregar producto</a>
</div>

<div class="tableBody">
   <table id="products" class="table table-secondary table-striped table-hover table-bordered">
      <thead class="">
         <tr class="text-center border border-dander">
            <th class="">ID</th>
            <th class="">codigo</th>
            <th class="">Unidad</th>
            <th class="">name</th>
            <th class="">description</th>
            <th class="">especificaciones</th>
            <th class="">cantidad</th>
            <th class="">productos</th>
            <th class="">Acciones</th>
         </tr>
      </thead>

      <tbody class="tableFilas">
         @guest
            <h3 class="text-center bg-warning p-4">No existen productos para mostrar</h3>
         @else 
         @foreach ($products as $producto)
            <tr>
               <td>{{ $producto->id }}</td>
               <td>{{ $producto->codigo }}</td>
               <td>{{ $producto->Unidad }}</td>
               <td>{{ $producto->name }}</td>
               <td>{{ $producto->description }}</td>
               <td>{{ $producto->especificaciones}}</td>
               <td>{{ $producto->cantidad }}</td>
               <td>{{ $producto->productos }}</td>
<<<<<<< HEAD
              
=======
>>>>>>> 96dda05ed3e4e0ecd0abe8b5d57e1671370e55fb
               <td>
                  <div class="accions">

                     <a class="btn btn-primary" href="{{ route('productos.edit', $producto->id) }}"><i class="fas fa-user-edit">&nbsp;</i> </a>
                     
                     <form class="btnDelete" action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><i class="fas fa-trash-alt"></i></button>
                     </form>
  
                  </div>

               </td>
            </tr>             
         @endforeach

         @endguest
      </tbody>
   </table>
</div>
</div>