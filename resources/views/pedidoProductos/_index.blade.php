


<div class="modelPage">
    @include('partials.sessions_status')
    <div class="text-right py-2">
       <a class="btn btn-success" href="{{ route('pedidoProductos.create') }}"> Solicitar Pedido</a>
    </div>

    <div class="tableBody">
        <table id="pedidoProductos" class="table table-secondary table-striped table-hover table-bordered">
            <thead class="">
                <tr class="text-center border border-dander">
                    <th class="">ID</th>
                    <th class="">fechaElaboracion</th>
                    <th class="">instructorEncargado</th>
                    <th class="">numeroDocumento</th>
                    <th class="">programa</th>
                    <th class="">ficha</th>
                    <th class="">producto</th>
                    <th class="">valorUnidad</th>
                    <th class="">cantidadProducir</th>
                    <th class="">valorProduccion</th>
                    <th class="">Acciones</th>
                </tr>
            </thead>

            <tbody class="tableFilas">
                @guest
                <h3 class="text-center bg-warning p-4">No hay pedidos por mostrar</h3>
                @else 
                @foreach ($pedido_products as $pedido_products)
                    <tr>
                        <td>{{ $pedido_products->id }}</td>
                        <td>{{ $pedido_products->fechaElaboracion }}</td>
                        <td>{{ $pedido_products->instructorEncargado }}</td>
                        <td>{{ $pedido_products->numeroDocumento }}</td>
                        <td>{{ $pedido_products->programa }}</td>
                        <td>{{ $pedido_products->ficha }}</td>
                        <td>{{ $pedido_products->producto }}</td>
                        <td>{{ $pedido_products->valorUnidad }}</td>
                        <td>{{ $pedido_products->cantidadProducir }}</td>
                        <td>{{ $pedido_products->valorProduccion }}</td>
                        <td>
                            <div class="accions">
    
                            <a class="btn btn-primary" href="{{ route('pedidoProductos.edit', $pedido_products->id) }}"><i class="fas fa-user-edit">&nbsp;</i> </a>
                            
                            <form class="btnDelete" action="{{ route('pedidoProductos.destroy', $pedido_products->id) }}" method="POST">
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
