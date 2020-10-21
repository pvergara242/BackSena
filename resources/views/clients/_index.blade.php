
<div class="modelPage">

   <div class="text-right">
      <a class="btn btn-success" href=""> Agregar cliente</a>
   </div>

   <div class="tableBody">
      <table class="table table-secondary table-striped table-hover table-bordered">
         <thead>
            <tr class="text-center border border-dander">
               <th>ID</th>
               <th>Documento</th>
               <th>Primer Nombre</th>
               <th>Segundo Nombre</th>
               <th>Primer Apellido</th>
               <th>Segundo Apellido</th>
               <th>Tipo de persona</th>
               <th>Razon social</th>
               <th>Código país</th>
               <th>Código departamento</th>
               <th>Código municipio</th>
               <th>Dirección</th>
               <th>Teléfono</th>
               <th>Email</th>
               <th>Fecha</th>
               <th>Accicones</th>
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
               </tr>             
            @endforeach
   
            @endguest
         </tbody>
      </table>
   </div>
</div>