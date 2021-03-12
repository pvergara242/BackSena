

<form class="formulario" action="{{ route('pedidoProductos.store') }}" method="POST" enctype="multipart/form-data">

    @csrf
 
    <div class="inpForm">
       <input class="form-control" 
          type="number" 
          name="fechaElaboracion" 
          value="{{ old('fechaElaboracion') }}"
          placeholder="Fecha de Elaboracion"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('fechaElaboracion') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="text" 
          name="instructorEncargado" 
          value="{{ old('instructorEncargado') }}"
          placeholder="Instructor Encargado"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('instructorEncargado') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="number" 
          name="numeroDocumento" 
          value="{{ old('numeroDocumento') }}"
          placeholder="Numero de Documento"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('numeroDocumento') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="text" 
          name="programa" 
          value="{{ old('programa') }}"
          placeholder="Programa"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('programa') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="number" 
          name="ficha" 
          value="{{ old('ficha') }}"
          placeholder="Ficha"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('ficha') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="text" 
          name="producto" 
          value="{{ old('producto') }}"
          placeholder="Producto"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('producto') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="number" 
          name="valorUnidad" 
          value="{{ old('valorUnidad') }}"
          placeholder="Valor Unidad"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('valorUnidad') }}</strong></p>
    </div>
    
    <div class="inpForm">
       <input class="form-control" 
          type="number" 
          name="cantidadProducir" 
          value="{{ old('cantidadProducir') }}"
          placeholder="Cantidad A Producir"
       >
       <p class="text-danger text-center "><strong>{{ $errors->first('cantidadProducir') }}</strong></p>
    </div>

    <div class="inpForm">
        <input class="form-control" 
           type="number" 
           name="valorProduccion" 
           value="{{ old('valorProduccion') }}"
           placeholder="Valor Produccion"
        >
        <p class="text-danger text-center "><strong>{{ $errors->first('valorProduccion') }}</strong></p>
     </div>

    <div class="container mb-5">
        <div class="col-md-4 mx-auto">
           <a href="{{ route('pedidoProducto') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Cancelar</a>  
     
        <button class="btn btn-success float-right" type="submit">Registrar Pedido</button>
        </div>   
     </div>
  
  </form>
  