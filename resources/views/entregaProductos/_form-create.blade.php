


<form class="formulario" action="{{ route('entregaProductos.store') }}" method="POST" enctype="multipart/form-data">

    @csrf
 
    <div class="inpForm">
       <input class="form-control" 
          type="number" 
          name="fechaSolicitud" 
          value="{{ old('fechaSolicitud') }}"
          placeholder="Fecha de Solicitud"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('fechaSolicitud') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="text" 
          name="area" 
          value="{{ old('area') }}"
          placeholder="Area"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('area') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="number" 
          name="codigoRegional" 
          value="{{ old('codigoRegional') }}"
          placeholder="Codigo Regional"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('codigoRegional') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="text" 
          name="nombreRegional" 
          value="{{ old('nombreRegional') }}"
          placeholder="Nombre Regional"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('nombreRegional') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="number" 
          name="codigoCentroCostos" 
          value="{{ old('codigoCentroCostos') }}"
          placeholder="Codigo Centro de Costos"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('codigoCentroCostos') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="text" 
          name="nombreCentroCostos" 
          value="{{ old('nombreCentroCostos') }}"
          placeholder="Nombre Centro de Costos"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('nombreCentroCostos') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="text" 
          name="coordinadorArea" 
          value="{{ old('coordinadorArea') }}"
          placeholder="Coordinador de Area"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('ManejaLotes') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="text" 
          name="numeroDocumento" 
          value="{{ old('numeroDocumento') }}"
          placeholder="Cedula"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('numeroDocumento') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="text" 
          name="nombreServidorPublico" 
          value="{{ old('nombreServidorPublico') }}"
          placeholder="Nombre del servidor publico a quien se le asigna el bien"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('nombreServidorPublico') }}</strong></p>
    </div>
    
    <div class="inpForm">
        <input class="form-control" 
           type="number" 
           name="numeroDocumentoServidor" 
           value="{{ old('numeroDocumentoServidor') }}"
           placeholder="Cedula"
        >
        <p class="text-danger text-center "><strong>{{ $errors->first('numeroDocumentoServidor') }}</strong></p>
     </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="number" 
          name="codigoFichaCaracterizacion" 
          value="{{ old('codigoFichaCaracterizacion') }}"
          placeholder="Ficha de Caracterizacion"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('codigoFichaCaracterizacion') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="number" 
          name="codigoSena" 
          value="{{ old('codigoSena') }}"
          placeholder="Codigo SENA"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('codigoSena') }}</strong></p>
    </div>
 
    <div class="inpForm">
       <input class="form-control" 
          type="text" 
          name="descripcionBien" 
          value="{{ old('descripcionBien') }}"
          placeholder="Descripcion del Bien"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('descripcionBien') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="number" 
          name="unidadMedida" 
          value="{{ old('unidadMedida') }}"
          placeholder="Unidad de Medida"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('unidadMedida') }}</strong></p>
    </div>
 
    <div class="inpForm">
       <input class="form-control" 
          type="text" 
          name="cantidadSolicitada" 
          value="{{ old('cantidadSolicitada') }}"
          placeholder="Cantidad Solicitada"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('cantidadSolicitada') }}</strong></p>
    </div>
 
 
    <div class="inpForm">
       <input class="form-control" 
          type="text" 
          name="cantidadEntregada" 
          value="{{ old('cantidadEntregada') }}"
          placeholder="Cantidad Entregada"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('cantidadEntregada') }}</strong></p>
    </div>
    
    
    <div class="inpForm">
       <input class="form-control" 
          type="text" 
          name="observaciones" 
          value="{{ old('observaciones') }}"
          placeholder="Observaciones"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('observaciones') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="text" 
          name="nombre" 
          value="{{ old('nombre') }}"
          placeholder="Nombre"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('nombre') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="text" 
          name="cargo" 
          value="{{ old('cargo') }}"
          placeholder="Cargo"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('cargo') }}</strong></p>
    </div>
 
    <div class="container mb-5">
       <div class="col-md-4 mx-auto">
          <a href="{{ route('producto') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Cancelar</a>  
    
       <button class="btn btn-success float-right" type="submit">REGISTRAR</button>
       </div>   
    </div>
 
 </form>
 
 
 