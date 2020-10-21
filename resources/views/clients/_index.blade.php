
<div class="modelPage">

   <div class="text-right py-2">
      <a class="btn btn-success" href="{{ route('cliente.create') }}"> Agregar cliente</a>
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
               <h3 class="text-center bg-warning p-4">No existen cleintes para mostrar</h3>
            @else 
            @foreach ($clients as $cliente)
               <tr>
                  <td>{{ $cliente->id }}</td>
                  <td>{{ $cliente->document }}</td>
                  <td>{{ $cliente->name }}</td>
                  <td>{{ $cliente->last_name }}</td>
                  <td>{{ $cliente->surname }}</td>
                  <td>{{ $cliente->last_surname }}</td>
                  <td>{{ $cliente->type }}</td>
                  <td>{{ $cliente->razon_social }}</td>
                  <td>{{ $cliente->pais_code }}</td>
                  <td>{{ $cliente->departamento_code }}</td>
                  <td>{{ $cliente->municipio_code }}</td>
                  <td>{{ $cliente->address }}</td>
                  <td>{{ $cliente->phone }}</td>
                  <td>{{ $cliente->email }}</td>
                  <td>{{ $cliente->created_at }}</td>
                  <td>
                     <div class="accions">

                        <a class="btn btn-primary" href="{{ route('cliente.edit', $cliente->id) }}"><i class="fas fa-user-edit">&nbsp;</i> </a>
                        
                        <form class="btnDelete" action="{{ route('cliente.destroy', $cliente->id) }}" method="POST">
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