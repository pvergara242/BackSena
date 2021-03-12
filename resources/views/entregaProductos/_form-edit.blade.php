@include('partials.sessions_status')

<form class="formulario" action="{{ route('entregaProductos.update', $entregaProducto->id) }}" method="POST">
   @csrf
   @method('PATCH')

   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="fechaSolicitud" 
         value="{{ $entregaProducto->fechaSolicitud }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('fechaSolicitud') }}</strong></p>
   </div>

   <div class="inpForm">
         <input class="form-control" 
         type="Text" 
         name="area" 
         value="{{ $entregaProducto->area }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('area') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
      type="number" 
      name="codigoRegional" 
      value="{{ $entregaProducto->codigoRegional }}"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('CodigoRegional') }}</strong></p>
</div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="nombreRegional" 
         value="{{ $entregaProducto->nombreRegional }}"
         >
      <p class="text-danger text-center "><strong>{{ $errors->first('nombreRegional') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="codigoCentroCostos" 
         value="{{ $entregaProducto->codigoCentroCostos }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('codigoCentroCostos') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="nombreCentroCostos" 
         value="{{ $entregaProducto->nombreCentroCostos }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('nombreCentroCostos') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="coordinadorArea" 
         value="{{ $entregaProducto->coordinadorArea }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('coordinadorArea') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="numeroDocumento" 
         value="{{ $entregaProducto->numeroDocumento }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('numeroDocumento') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="nombreServidorPublico" 
         value="{{ $entregaProducto->nombreServidorPublico }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('nombreServidorPublico') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="numeroDocumentoServidor" 
         value="{{ $entregaProducto->numeroDocumentoServidor }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('numeroDocumentoServidor') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="codigoFichaCaracterizacion" 
         value="{{ $entregaProducto->codigoFichaCaracterizacion }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('codigoFichaCaracterizacion') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="codigoSena" 
         value="{{ $entregaProducto->codigoSena }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('codigoSena') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="descripcionBien" 
         value="{{ $entregaProducto->descripcionBien }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('descripcionBien') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="unidadMedida" 
         value="{{ $entregaProducto->unidadMedida }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('unidadMedida') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="cantidadSolicitada" 
         value="{{ $entregaProducto->cantidadSolicitada }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('cantidadSolicitada') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="cantidadEntregada" 
         value="{{ $entregaProducto->cantidadEntregada }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('cantidadEntregada') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="observaciones" 
         value="{{ $entregaProducto->observaciones }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('observaciones') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="nombre" 
         value="{{ $entregaProducto->nombre }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('nombre') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="cargo" 
         value="{{ $entregaProducto->cargo }}"
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
