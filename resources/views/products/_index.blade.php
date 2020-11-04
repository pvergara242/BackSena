
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
            @foreach ($products as $productos)
               <tr>
                  <td>{{ $productos->id }}</td>
                  <td>{{ $productos->CodigoProducto }}</td>
                  <td>{{ $productos->nombreProductos }}</td>
                  <td>{{ $productos->CantidadProducto }}</td>
                  <td>{{ $productos->consumo }}</td>
                  <td>{{ $productos->MercanciaVenta }}</td>
                  <td>{{ $productos->produccionInterna }}</td>
                  <td>{{ $productos->ManejaLotes }}</td>
                  <td>{{ $productos->esServicio }}</td>
                  <td>{{ $productos->productoActivo }}</td>
                  <td>{{ $productos->DatosFabricante }}</td>
                  <td>{{ $productos->Medidas }}</td>
                  <td>{{ $productos->UbicacionFisica }}</td>
                  <td>{{ $productos->Referencia }}</td>
                  <td>{{ $productos->Presentacion }}</td>
                  <td>{{ $productos->ProductoEquivalente }}</td>
                  <td>{{ $productos->StockMinimo }}</td>
                  <td>{{ $productos->StockMaximo }}</td>
                  <td>{{ $productos->TiempoReposicion }}</td>
                  <td>{{ $productos->CuentaInventarios }}</td>
                  <td>{{ $productos->CuentaContableIngreso }}</td>
                  <td>{{ $productos->CuentaContableIngresoAjuste }}</td>
                  <td>{{ $productos->DevolucionVentas }}</td>
                  <td>{{ $productos->DevolucionCompras }}</td>
                  <td>{{ $productos->CuentaContableGasto }}</td>
                  <td>{{ $productos->CuentaContableGastoAjuste }}</td>
                  <td>{{ $productos->ImpuestoCompras }}</td>
                  <td>{{ $productos->ImpuestoVentas }}</td>
              
                  
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