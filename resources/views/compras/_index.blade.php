<!-- 
<div class="modelPage">

<div class="text-right py-2">
   <a class="btn btn-success" href="{{ route('compras.create') }}"> Agregar compra</a>
</div>

<div class="tableBody">
   <table id="compras" class="table table-secondary table-striped table-hover table-bordered">
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
            <h3 class="text-center bg-warning p-4">No existen compras para mostrar</h3>
         @else 
         @foreach ($compras as $compra)
            <tr>
               <td>{{ $compra->id }}</td>
               <td>{{ $compra->codigo }}</td>
               <td>{{ $compra->Unidad }}</td>
               <td>{{ $compra->name }}</td>
               <td>{{ $compra->description }}</td>
               <td>{{ $compra->especificaciones}}</td>
               <td>{{ $compra->cantidad }}</td>
               <td>{{ $compra->productos }}</td>
               <td>
                  <div class="accions">

                     <a class="btn btn-primary" href="{{ route('compras.edit', $compra->id) }}"><i class="fas fa-user-edit">&nbsp;</i> </a>
                     
                     <form class="btnDelete" action="{{ route('compras.destroy', $compra->id) }}" method="POST">
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
</div> -->