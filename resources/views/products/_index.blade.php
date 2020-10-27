
<div class="modelPage">
   @include('partials.sessions_status')
   <div class="text-right py-2">
      <a class="btn btn-success" href="{{ route('productos.create') }}"> Agregar Producto</a>
   </div>

   <div class="tableBody">
      <table id="clients" class="table table-secondary table-striped table-hover table-bordered">
         <thead class="">
            <tr class="text-center border border-dander">
               <th class="">ID</th>
               <th class="">Documento</th>
               <th class="">Primer Nombre</th>
               <th class="">Segundo Nombre</th>
               <th class="">Primer Apellido</th>
               <th class="">Segundo Apellido</th>
               <th class="">Tipo de persona</th>
               <th class="">Razon social</th>
               <th class="">Código país</th>
               <th class="">Código departamento</th>
               <th class="">Código municipio</th>
               <th class="">Dirección</th>
               <th class="">Teléfono</th>
               <th class="">Email</th>
               <th class="">Fecha</th>
               <th class="">Accicones</th>
            </tr>
         </thead>
   
         <tbody class="tableFilas">
            @guest
               <h3 class="text-center bg-warning p-4">No existen productos para mostrar</h3>
            @else 
            @foreach ($products as $productos)
               <tr>
                  <td>{{ $productos->id }}</td>
                  <td>{{ $productos->document }}</td>
                  <td>{{ $productos->name }}</td>
                  <td>{{ $productos->last_name }}</td>
                  <td>{{ $productos->surname }}</td>
                  <td>{{ $productos->last_surname }}</td>
                  <td>{{ $productos->type }}</td>
                  <td>{{ $productos->razon_social }}</td>
                  <td>{{ $productos->pais_code }}</td>
                  <td>{{ $productos->departamento_code }}</td>
                  <td>{{ $productos->municipio_code }}</td>
                  <td>{{ $productos->address }}</td>
                  <td>{{ $productos->phone }}</td>
                  <td>{{ $productos->email }}</td>
                  <td>{{ $productos->created_at }}</td>
                  <td>
                     <div class="accions">

                        <a class="btn btn-primary" href="{{ route('productos.edit', $productos->id) }}"><i class="fas fa-user-edit">&nbsp;</i> </a>
                        
                        <form class="btnDelete" action="{{ route('productos.destroy', $productos->id) }}" method="POST">
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
      <div class="pagination">{{ $products->links() }}</div>
</div>