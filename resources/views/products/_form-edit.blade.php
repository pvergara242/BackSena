@include('partials.sessions_status')

<form class="formulario" action="{{ route('productos.update', $products->id) }}" method="POST">
   @csrf
   @method('PATCH')

   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="CodigoProducto" 
         value="{{ $products->CodigoProducto }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CodigoProducto') }}</strong></p>
   </div>

   <div class="inpForm">
      {{-- <input class="form-control" 
         type="Text" 
         name="NombreProducto" 
         value="{{ $products->NombreProducto }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('NombreProducto') }}</strong></p> --}}
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="CantidadProducto" 
         value="{{ $products->CantidadProducto }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CantidadProducto') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="consumo" 
         value="{{ $products->consumo }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('last_name') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="MercanciaVenta" 
         value="{{ $products->MercanciaVenta }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('MercanciaVenta') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="produccionInterna" 
         value="{{ $products->produccionInterna }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('produccionInterna') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="ManejaLotes" 
         value="{{ $products->ManejaLotes }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('ManejaLotes') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="esServicio" 
         value="{{ $products->esServicio }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('esServicio') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="productoActivo" 
         value="{{ $products->productoActivo }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('productoActivo') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="DatosFabricante" 
         value="{{ $products->DatosFabricante }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('DatosFabricante') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="Medidas" 
         value="{{ $products->Medidas }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('Medidas') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="UbicacionFisica" 
         value="{{ $products->UbicacionFisica }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('UbicacionFisica') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="Referencia" 
         value="{{ $products->Referencia }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('Referencia') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="Presentacion" 
         value="{{ $products->Presentacion }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('Presentacion') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="ProductoEquivalente" 
         value="{{ $products->ProductoEquivalente }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('ProductoEquivalente') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="StockMinimo" 
         value="{{ $products->StockMinimo }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('StockMinimo') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="StockMaximo" 
         value="{{ $products->StockMaximo }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('StockMaximo') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="TiempoReposicion" 
         value="{{ $products->TiempoReposicion }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('TiempoReposicion') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="CuentaInventarios" 
         value="{{ $products->CuentaInventarios }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaInventarios') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="CuentaContableIngreso" 
         value="{{ $products->CuentaContableIngreso }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaInventarios') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="CuentaContableIngresoAjuste" 
         value="{{ $products->CuentaContableIngresoAjuste }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaContableIngresoAjuste') }}</strong></p>
   </div>
   
    
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="CuentaContableIngresoAjuste" 
         value="{{ $products->CuentaContableIngresoAjuste }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaContableIngresoAjuste') }}</strong></p>
   </div>
   
    
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="DevolucionVentas" 
         value="{{ $products->DevolucionVentas }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('DevolucionVentas') }}</strong></p>
   </div>
   
    
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="DevolucionCompras" 
         value="{{ $products->DevolucionCompras }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('DevolucionCompras') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="DevolucionCompras" 
         value="{{ $products->DevolucionCompras }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('DevolucionCompras') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="CuentaContableGasto" 
         value="{{ $products->CuentaContableGasto }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaContableGasto') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="CuentaContableGastoAjuste" 
         value="{{ $products->DevoluCuentaContableGastoAjuste}}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaContableGastoAjuste') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="ImpuestoCompras" 
         value="{{ $products->ImpuestoCompras}}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('ImpuestoCompras') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="texto" 
         name="ImpuestoVentas" 
         value="{{ $products->ImpuestoVentas}}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('ImpuestoVentas') }}</strong></p>
   </div>
   
   <div class="container mb-5">
      <div class="col-md-4 mx-auto">
         <a href="{{ route('products') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Cancelar</a>  
   
      <button class="btn btn-success float-right" type="submit">Actualizar Producto</button>
      
      </div>   
   </div>


</form>
