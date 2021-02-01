
  

<div class="modelPage">
    @include('partials.sessions_status')
    <div class="text-right py-2">
       <a class="btn btn-success" href="{{ route('entregaProductos.create') }}"> Entregar Producto</a>
    </div>
 
    <div class="tableBody">
       <table id="products" class="table table-secondary table-striped table-hover table-bordered">
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
             @foreach ($products as $productos)
                <tr>
                   <td>{{ $productos->id }}</td>
                   <td>{{ $productos->fechaSolicitud }}</td>
                   <td>{{ $productos->area }}</td>
                   <td>{{ $productos->codigoRegional }}</td>
                   <td>{{ $productos->nombreRegional }}</td>
                   <td>{{ $productos->codigoCentroCostos }}</td>
                   <td>{{ $productos->nombreCentroCostos }}</td>
                   <td>{{ $productos->coordinadorArea }}</td>
                   <td>{{ $productos->numeroDocumento }}</td>
                   <td>{{ $productos->nombreServidorPublico }}</td>
                   <td>{{ $productos->numeroDocumentoServidor }}</td>
                   <td>{{ $productos->codigoFichaCaracterizacion }}</td>
                   <td>{{ $productos->codigoSena }}</td>
                   <td>{{ $productos->descripcionBien }}</td>
                   <td>{{ $productos->unidadMedida }}</td>
                   <td>{{ $productos->cantidadSolicitada }}</td>
                   <td>{{ $productos->cantidadEntregada }}</td>
                   <td>{{ $productos->observaciones }}</td>
                   <td>{{ $productos->nombre }}</td>
                   <td>{{ $productos->cargo }}</td>

                   <td>
                      <div class="accions">
 
                         <a class="btn btn-primary" href="{{ route('entregaProductos.edit', $EntregaProductos->id) }}"><i class="fas fa-user-edit">&nbsp;</i> </a>
                         
                         <form class="btnDelete" action="{{ route('entregaProductos.destroy', $EntregaProductos->id) }}" method="POST">
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
 
 