@include('partials.sessions_status')

<form class="formulario" action="{{ route('pedidoProductos.update', $EntregaProductos->id) }}" method="POST">
   @csrf
   @method('PATCH')
 
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="fechaElaboracion" 
         value="{{ $PedidoProductos->fechaElaboracion }}">
      <p class="text-danger text-center "><strong>{{ $errors->first('fechaElaboracion') }}</strong></p>
   </div>
 
   <div class="inpForm">
      <input class="form-control" 
         type="Text" 
         name="instructorEncargado" 
         value="{{ $PedidoProductos->instructorEncargado }}">
      <p class="text-danger text-center "><strong>{{ $errors->first('instructorEncargado') }}</strong></p>
   </div>
 
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="numeroDocumento" 
         value="{{ $PedidoProductos->numeroDocumento }}">
      <p class="text-danger text-center "><strong>{{ $errors->first('numeroDocumento') }}</strong></p>
   </div>
 
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="programa" 
         value="{{ $PedidoProductos->programa }}">
      <p class="text-danger text-center "><strong>{{ $errors->first('programa') }}</strong></p>
   </div>
 
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="ficha" 
         value="{{ $PedidoProductos->ficha }}">
      <p class="text-danger text-center "><strong>{{ $errors->first('ficha') }}</strong></p>
   </div>
 
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="producto" 
         value="{{ $PedidoProductos->producto }}">
      <p class="text-danger text-center "><strong>{{ $errors->first('producto') }}</strong></p>
   </div>
 
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="valorUnidad" 
         value="{{ $PedidoProductos->valorUnidad }}">
      <p class="text-danger text-center "><strong>{{ $errors->first('valorUnidad') }}</strong></p>
   </div>
    
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="cantidadProducir" 
         value="{{ $PedidoProductos->cantidadProducir }}">
      <p class="text-danger text-center "><strong>{{ $errors->first('cantidadProducir') }}</strong></p>
   </div>
    
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="valorProduccion" 
         value="{{ $PedidoProductos->valorProduccion }}">
      <p class="text-danger text-center "><strong>{{ $errors->first('valorProduccion') }}</strong></p>
   </div>

   <div class="container mb-5">
      <div class="col-md-4 mx-auto">
         <a href="{{ route('producto') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Cancelar</a>  

         <button class="btn btn-success float-right" type="submit">Actualizar Pedido</button>
      </div>
   </div>
   
  </form>
  