
  

<div class="modelPage">
    @include('partials.sessions_status')
    <div class="text-right py-2">
       <a class="btn btn-success" href="{{ route('entregaProductos.create') }}"> Entregar Producto</a>
    </div>
 
    <div class="tableBody">
       <table id="entregaProductos" class="table table-secondary table-striped table-hover table-bordered">
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
                <h3 class="text-center bg-warning p-4">No hay entregas de productos por mostrar</h3>
             @else 
             @foreach ($entregaProductos as $entregaProductos)
                <tr>
                   <td>{{ $entregaProductos->id }}</td>
                   <td>{{ $entregaProductos->fechaSolicitud }}</td>
                   <td>{{ $entregaProductos->area }}</td>
                   <td>{{ $entregaProductos->codigoRegional }}</td>
                   <td>{{ $entregaProductos->nombreRegional }}</td>
                   <td>{{ $entregaProductos->codigoCentroCostos }}</td>
                   <td>{{ $entregaProductos->nombreCentroCostos }}</td>
                   <td>{{ $entregaProductos->coordinadorArea }}</td>
                   <td>{{ $entregaProductos->numeroDocumento }}</td>
                   <td>{{ $entregaProductos->nombreServidorPublico }}</td>
                   <td>{{ $entregaProductos->numeroDocumentoServidor }}</td>
                   <td>{{ $entregaProductos->codigoFichaCaracterizacion }}</td>
                   <td>{{ $entregaProductos->codigoSena }}</td>
                   <td>{{ $entregaProductos->descripcionBien }}</td>
                   <td>{{ $entregaProductos->unidadMedida }}</td>
                   <td>{{ $entregaProductos->cantidadSolicitada }}</td>
                   <td>{{ $entregaProductos->cantidadEntregada }}</td>
                   <td>{{ $entregaProductos->observaciones }}</td>
                   <td>{{ $entregaProductos->nombre }}</td>
                   <td>{{ $entregaProductos->cargo }}</td>e
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
       <div class="pagination">{{ $entregaProductos->links() }}</div>
 </div>
 
 