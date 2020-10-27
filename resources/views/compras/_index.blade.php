
<div class="modelPage">
   @include('partials.sessions_status')
   <div class="text-right py-2">
      <a class="btn btn-success" href="{{ route('compras.create') }}"> Agregar compra</a>
   </div>

   <div class="tableBody">
      <table id="compras" class="table table-secondary table-striped table-hover table-bordered">
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
               <h3 class="text-center bg-warning p-4">No existen compras para mostrar</h3>
            @else 
            @foreach ($compras as $compras)
               <tr>
                  <td>{{ $compras->id }}</td>
                  <td>{{ $compras->document }}</td>
                  <td>{{ $compras->name }}</td>
                  <td>{{ $compras->last_name }}</td>
                  <td>{{ $compras->surname }}</td>
                  <td>{{ $compras->last_surname }}</td>
                  <td>{{ $compras->type }}</td>
                  <td>{{ $compras->razon_social }}</td>
                  <td>{{ $compras->pais_code }}</td>
                  <td>{{ $compras->departamento_code }}</td>
                  <td>{{ $compras->municipio_code }}</td>
                  <td>{{ $compras->address }}</td>
                  <td>{{ $compras->phone }}</td>
                  <td>{{ $compras->email }}</td>
                  <td>{{ $compras->created_at }}</td>
                  <td>
                     <div class="accions">

                        <a class="btn btn-primary" href="{{ route('compras.edit', $compras->id) }}"><i class="fas fa-user-edit">&nbsp;</i> </a>
                        
                        <form class="btnDelete" action="{{ route('compras.destroy', $compras->id) }}" method="POST">
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
      <div class="pagination">{{ $clients->links() }}</div>
</div>