
  

<div class="modelPage">
   @include('partials.sessions_status')
   <div class="text-right py-2">
      <a class="btn btn-success" href="{{ route('entregaProductos.create') }}"> Agrega Entrega de  Producto</a>
   </div>

   <div class="tableBody">
      <table id="entrega_products" class="table table-secondary table-striped table-hover table-bordered">
         <thead class="">
            <tr class="text-center border border-dander">
               <th class="">ID</th>
               <th class="">fechaSolicitud</th>
               <th class="">area</th>
               <th class="">codigoRegional</th>
               <th class="">nombreRegional</th>
               <th class="">codigoCentroCostos</th>
               <th class="">nombreCentroCostos</th>
               <th class="">coordinadorArea</th>
               <th class="">numeroDocumento</th>
               <th class="">nombreServidorPublico</th>
               <th class="">numeroDocumentoServidor</th>
               <th class="">codigoFichaCaracterizacion</th>
               <th class="">codigoSena</th>
               <th class="">descripcionBien</th>
               <th class="">unidadMedida</th>
               <th class="">cantidadSolicitada</th>
               <th class="">cantidadEntregada</th>
               <th class="">observaciones</th>
               <th class="">nombre</th>
               <th class="">cargo</th>
               <th class="">Acciones</th>
            </tr>
         </thead>
   
         <tbody class="tableFilas">
            @guest
               <h3 class="text-center bg-warning p-4">No existen productos para mostrar</h3>
            @else 
            @foreach ($entrega_products as $entrega_products)
               <tr>
                  <td>{{ $entrega_products->id }}</td>
                  <td>{{ $entrega_products->fechaSolicitud }}</td>
                  <td>{{ $entrega_products->area }}</td>
                  <td>{{ $entrega_products->codigoRegional }}</td>
                  <td>{{ $entrega_products->nombreRegional }}</td>
                  <td>{{ $entrega_products->codigoCentroCostos }}</td>
                  <td>{{ $entrega_products->nombreCentroCostos }}</td>
                  <td>{{ $entrega_products->coordinadorArea }}</td>
                  <td>{{ $entrega_products->numeroDocumento }}</td>
                  <td>{{ $entrega_products->nombreServidorPublico }}</td>
                  <td>{{ $entrega_products->numeroDocumentoServidor }}</td>
                  <td>{{ $entrega_products->codigoFichaCaracterizacion }}</td>
                  <td>{{ $entrega_products->codigoSena }}</td>
                  <td>{{ $entrega_products->descripcionBien }}</td>
                  <td>{{ $entrega_products->unidadMedida }}</td>
                  <td>{{ $entrega_products->cantidadSolicitada }}</td>
                  <td>{{ $entrega_products->cantidadEntregada }}</td>
                  <td>{{ $entrega_products->observaciones }}</td>
                  <td>{{ $entrega_products->nombre }}</td>
                  <td>{{ $entrega_products->cargo }}</td>
                  
                  <td>
                     <div class="accions">

                        <a class="btn btn-primary" href="{{ route('entregaProductos.edit', $entrega_products->id) }}"><i class="fas fa-user-edit">&nbsp;</i> </a>
                        
                        <form class="btnDelete" action="{{ route('entregaProductos.destroy', $entrega_products->id) }}" method="POST">
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

