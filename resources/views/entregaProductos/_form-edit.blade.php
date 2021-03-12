@include('partials.sessions_status')


<form class="formulario" action="{{ route('entregaProductos.update', $entregaProductos->id) }}" method="POST">
   @csrf
   @method('PATCH')

   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="fechaSolicitud" 
         value="{{ $entregaProductos->fechaSolicitud }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('fechaSolicitud') }}</strong></p>
   </div>

   <div class="inpForm">
         <input class="form-control" 
         type="Text" 
         name="area" 
         value="{{ $entregaProductos->area }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('area') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
      type="number" 
      name="codigoRegional" 
      value="{{ $entregaProductos->codigoRegional }}"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('CodigoRegional') }}</strong></p>
</div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="nombreRegional" 
         value="{{ $entregaProductos->nombreRegional }}"
         >
      <p class="text-danger text-center "><strong>{{ $errors->first('nombreRegional') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="codigoCentroCostos" 
         value="{{ $entregaProductos->codigoCentroCostos }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('codigoCentroCostos') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="nombreCentroCostos" 
         value="{{ $entregaProductos->nombreCentroCostos }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('nombreCentroCostos') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="coordinadorArea" 
         value="{{ $entregaProductos->coordinadorArea }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('coordinadorArea') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="numeroDocumento" 
         value="{{ $entregaProductos->numeroDocumento }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('numeroDocumento') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="nombreServidorPublico" 
         value="{{ $entregaProductos->nombreServidorPublico }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('nombreServidorPublico') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="numeroDocumentoServidor" 
         value="{{ $entregaProductos->numeroDocumentoServidor }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('numeroDocumentoServidor') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="codigoFichaCaracterizacion" 
         value="{{ $entregaProductos->codigoFichaCaracterizacion }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('codigoFichaCaracterizacion') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="codigoSena" 
         value="{{ $entregaProductos->codigoSena }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('codigoSena') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="descripcionBien" 
         value="{{ $entregaProductos->descripcionBien }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('descripcionBien') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="unidadMedida" 
         value="{{ $entregaProductos->unidadMedida }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('unidadMedida') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="cantidadSolicitada" 
         value="{{ $entregaProductos->cantidadSolicitada }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('cantidadSolicitada') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="cantidadEntregada" 
         value="{{ $entregaProductos->cantidadEntregada }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('cantidadEntregada') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="observaciones" 
         value="{{ $entregaProductos->observaciones }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('observaciones') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="nombre" 
         value="{{ $entregaProductos->nombre }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('nombre') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="cargo" 
         value="{{ $entregaProductos->cargo }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('cargo') }}</strong></p>
   </div>
   
   <div class="container mb-5">
      <div class="col-md-4 mx-auto">
         <a href="{{ route('entregaProducto') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Cancelar</a>  
   
      <button class="btn btn-success float-right" type="submit">Actualizar Entrega de Producto</button>
      
      </div>   
   </div>

</form>
