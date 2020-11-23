
  

<div class="modelPage">
   @include('partials.sessions_status')
   <div class="text-right py-2">
      <a class="btn btn-success" href="{{ route('compra.create') }}"> Agregar Compra</a>
   </div>

   <div class="tableBody">
      <table id="compras" class="table table-secondary table-striped table-hover table-bordered">
         <thead class="">
            <tr class="text-center border border-dander">
               <th class="">ID</th>
               <th class="">CodigoComprobante</th>
               <th class="">numeroFactura</th>
               <th class="">DetalleGeneral</th>
               <th class="">FechaCompra</th>
               <th class="">CodigoTercero</th>
               <th class="">nombreTercero</th>
               <th class="">codigoProducto</th>
               <th class="">nombreProducto</th>
               <th class="">Cantidades</th>
               <th class="">unidadesDisponibles</th>
               <th class="">CostoUnitarioCompra</th>
               <th class="">CostoTotalCompra</th>
               <th class="">Referencia</th>
               <th class="">Presentacion</th>
               <th class="">Impuestos</th>
               <th class="">Porcentajeimpuesto</th>
               <th class="">TotalImpuestos</th>
               <th class="">RetencionFuente</th>
               <th class="">TiempoReposicion</th>
               <th class="">PorcentajeRetefte</th>
               <th class="">TotalRetenciónFuente</th>
               <th class="">Acciones</th>
            </tr>
         </thead>
   
         <tbody class="tableFilas">
            @guest
               <h3 class="text-center bg-warning p-4">No existen compras para mostrar</h3>
            @else 
            @foreach ($compras as $compras)
               <tr>
                  <td>{{ $compras->id }}</td>
                  <td>{{ $compras->CodigoComprobante }}</td>
                  <td>{{ $compras->numeroFactura }}</td>
                  <td>{{ $compras->DetalleGeneral }}</td>
                  <td>{{ $compras->FechaCompra }}</td>
                  <td>{{ $compras->CodigoTercero }}</td>
                  <td>{{ $compras->nombreTercero }}</td>
                  <td>{{ $compras->codigoProducto }}</td>
                  <td>{{ $compras->nombreProducto }}</td>
                  <td>{{ $compras->Cantidades }}</td>
                  <td>{{ $compras->unidadesDisponibles }}</td>
                  <td>{{ $compras->CostoUnitarioCompra }}</td>
                  <td>{{ $compras->CostoTotalCompra }}</td>
                  <td>{{ $compras->Referencia }}</td>
                  <td>{{ $compras->Presentacion }}</td>
                  <td>{{ $compras->Impuestos }}</td>
                  <td>{{ $compras->Porcentajeimpuesto }}</td>
                  <td>{{ $compras->TotalImpuestos }}</td>
                  <td>{{ $compras->RetencionFuente }}</td>
                  <td>{{ $compras->PorcentajeRetefte }}</td>
                  <td>{{ $compras->TotalRetenciónFuente }}</td>
                  <td class="">Acciones</td>
                  <td>
                     <div class="accions">

                        <a class="btn btn-primary" href="{{ route('compra.edit', $compras->id) }}"><i class="fas fa-user-edit">&nbsp;</i> </a>
                        
                        <form class="btnDelete" action="{{ route('compra.destroy', $compras->id) }}" method="POST">
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

