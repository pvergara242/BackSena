@include('partials.sessions_status')

<form class="formulario" action="{{ route('productos.update', $Products->id) }}" method="POST">
   @csrf
   @method('PATCH')

   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="CodigoProducto" 
         value="{{ $Products->CodigoProducto }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CodigoProducto') }}</strong></p>
   </div>

   <div class="inpForm">
          <input class="form-control" 
         type="Text" 
         name="nombreProducto" 
         value="{{ $Products->nombreProducto }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('nombreProducto') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="consumo" 
         value="{{ $Products->consumo }}"
         >
      <p class="text-danger text-center "><strong>{{ $errors->first('consumo') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="MercanciaVenta" 
         value="{{ $Products->MercanciaVenta }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('MercanciaVenta') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="produccionInterna" 
         value="{{ $Products->produccionInterna }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('produccionInterna') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="ManejaLotes" 
         value="{{ $Products->ManejaLotes }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('ManejaLotes') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="esServicio" 
         value="{{ $Products->esServicio }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('esServicio') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="productoActivo" 
         value="{{ $Products->productoActivo }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('productoActivo') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="DatosFabricante" 
         value="{{ $Products->DatosFabricante }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('DatosFabricante') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="Medidas" 
         value="{{ $Products->Medidas }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('Medidas') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="UbicacionFisica" 
         value="{{ $Products->UbicacionFisica }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('UbicacionFisica') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="Referencia" 
         value="{{ $Products->Referencia }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('Referencia') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="Presentacion" 
         value="{{ $Products->Presentacion }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('Presentacion') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="ProductoEquivalente" 
         value="{{ $Products->ProductoEquivalente }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('ProductoEquivalente') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="StockMinimo" 
         value="{{ $Products->StockMinimo }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('StockMinimo') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="StockMaximo" 
         value="{{ $Products->StockMaximo }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('StockMaximo') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="TiempoReposicion" 
         value="{{ $Products->TiempoReposicion }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('TiempoReposicion') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="CuentaInventarios" 
         value="{{ $Products->CuentaInventarios }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaInventarios') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="CuentaContableIngreso" 
         value="{{ $Products->CuentaContableIngreso }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaContableIngreso') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="CuentaContableIngresoAjuste" 
         value="{{ $Products->CuentaContableIngresoAjuste }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaContableIngresoAjuste') }}</strong></p>
   </div>
   
    
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="CuentaContableIngresoAjuste" 
         value="{{ $Products->CuentaContableIngresoAjuste }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaContableIngresoAjuste') }}</strong></p>
   </div>
   
    
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="DevolucionVentas" 
         value="{{ $Products->DevolucionVentas }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('DevolucionVentas') }}</strong></p>
   </div>
      
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="DevolucionCompras" 
         value="{{ $Products->DevolucionCompras }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('DevolucionCompras') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="CuentaContableGasto" 
         value="{{ $Products->CuentaContableGasto }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaContableGasto') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="CuentaContableGastoAjuste" 
         value="{{ $Products->CuentaContableGastoAjuste}}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaContableGastoAjuste') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="ImpuestoCompras" 
         value="{{ $Products->ImpuestoCompras}}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('ImpuestoCompras') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="ImpuestoVentas" 
         value="{{ $Products->ImpuestoVentas}}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('ImpuestoVentas') }}</strong></p>
   </div>
   
   <div class="container mb-5">
      <div class="col-md-4 mx-auto">
         <a href="{{ route('productos') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Cancelar</a>  
   
      <button class="btn btn-success float-right" type="submit">Actualizar Producto</button>
      
      </div>   
   </div>


</form>

