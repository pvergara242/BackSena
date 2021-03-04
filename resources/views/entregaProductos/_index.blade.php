
  

<div class="modelPage">
   @include('partials.sessions_status')
   <div class="text-right py-2">
      <a class="btn btn-success" href="{{ route('entregaProductos.create') }}"> Agrega Entrega de  Producto</a>
   </div>

   <div class="tableBody">
      <table id="entregaProductos" class="table table-secondary table-striped table-hover table-bordered">
         <thead class="">
            <tr class="text-center border border-dander">
               <th class="">ID</th>
               <th class="">CodigoProducto</th>
               <th class="">nombreProducto</th>
               <th class="">CantidadProducto</th>
               <th class="">consumo</th>
               <th class="">MercanciaVenta</th>
               <th class="">produccionInterna</th>
               <th class="">ManejaLotes</th>
               <th class="">esServicio</th>
               <th class="">productoActivo</th>
               <th class="">DatosFabricante</th>
               <th class="">Medidas</th>
               <th class="">UbicacionFisica</th>
               <th class="">Referencia</th>
               <th class="">Presentacion</th>
               <th class="">ProductoEquivalente</th>
               <th class="">StockMinimo</th>
               <th class="">StockMaximo</th>
               <th class="">TiempoReposicion</th>
               <th class="">CuentaInventarios</th>
               <th class="">CuentaContableIngreso</th>
               <th class="">CuentaContableIngresoAjuste</th>
               <th class="">DevolucionVentas</th>
               <th class="">DevolucionCompras</th>
               <th class="">CuentaContableGasto</th>
               <th class="">CuentaContableGastoAjuste</th>
               <th class="">ImpuestoCompras</th>
               <th class="">ImpuestoVentas</th>
               <th class="">Acciones</th>
            </tr>
         </thead>
   
         <tbody class="tableFilas">
            @guest
               <h3 class="text-center bg-warning p-4">No existen productos para mostrar</h3>
            @else 
            @foreach ($entregaProductos as $entregaProductos)
               <tr>
                  <td>{{ $entregaProductos->id }}</td>
                  <td>{{ $entregaProductos->CodigoProducto }}</td>
                  <td>{{ $entregaProductos->nombreProducto }}</td>
                  <td>{{ $entregaProductos->CantidadProducto }}</td>
                  <td>{{ $entregaProductos->consumo }}</td>
                  <td>{{ $entregaProductos->MercanciaVenta }}</td>
                  <td>{{ $entregaProductos->produccionInterna }}</td>
                  <td>{{ $entregaProductos->ManejaLotes }}</td>
                  <td>{{ $entregaProductos->esServicio }}</td>
                  <td>{{ $entregaProductos->productoActivo }}</td>
                  <td>{{ $entregaProductos->DatosFabricante }}</td>
                  <td>{{ $entregaProductos->Medidas }}</td>
                  <td>{{ $entregaProductos->UbicacionFisica }}</td>
                  <td>{{ $entregaProductos->Referencia }}</td>
                  <td>{{ $entregaProductos->Presentacion }}</td>
                  <td>{{ $entregaProductos->ProductoEquivalente }}</td>
                  <td>{{ $entregaProductos->StockMinimo }}</td>
                  <td>{{ $entregaProductos->StockMaximo }}</td>
                  <td>{{ $entregaProductos->TiempoReposicion }}</td>
                  <td>{{ $entregaProductos->CuentaInventarios }}</td>
                  <td>{{ $entregaProductos->CuentaContableIngreso }}</td>
                  <td>{{ $entregaProductos->CuentaContableIngresoAjuste }}</td>
                  <td>{{ $entregaProductos->DevolucionVentas }}</td>
                  <td>{{ $entregaProductos->DevolucionCompras }}</td>
                  <td>{{ $entregaProductos->CuentaContableGasto }}</td>
                  <td>{{ $entregaProductos->CuentaContableGastoAjuste }}</td>
                  <td>{{ $entregaProductos->ImpuestoCompras }}</td>
                  <td>{{ $entregaProductos->ImpuestoVentas }}</td>
              
                  
                  <td>
                     <div class="accions">

                        <a class="btn btn-primary" href="{{ route('entregaProductos.edit', $entregaProductos->id) }}"><i class="fas fa-user-edit">&nbsp;</i> </a>
                        
                        <form class="btnDelete" action="{{ route('entregaProductos.destroy', $entregaProductos->id) }}" method="POST">
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
      <div class="pagination">{{ $entregaProductos->links() }}</div>
</div>

