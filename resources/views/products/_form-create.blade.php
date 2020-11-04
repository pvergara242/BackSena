@include('partials.sessions_status')

<form class="formulario" action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">

   @csrf

   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="CodigoProducto" 
         value="{{ old('CodigoProducto') }}"
         placeholder="CodigoProducto"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CodigoProducto') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="nombreProducto" 
         value="{{ old('nombreProducto') }}"
         placeholder="nombreProducto"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('nombreProducto') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="CantidadProducto" 
         value="{{ old('CantidadProducto') }}"
         placeholder="CantidadProducto"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CantidadProducto') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="consumo" 
         value="{{ old('consumo') }}"
         placeholder="consumo"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('consumo') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="MercanciaVenta" 
         value="{{ old('MercanciaVenta') }}"
         placeholder="Mercancia Venta"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('MercanciaVenta') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="produccionInterna" 
         value="{{ old('produccionInterna') }}"
         placeholder="produccionInterna"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('produccionInterna') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="ManejaLotes" 
         value="{{ old('ManejaLotes') }}"
         placeholder="Maneja Lotes"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('ManejaLotes') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="esServicio" 
         value="{{ old('esServicio') }}"
         placeholder="es Servicio"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('esServicio') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="productoActivo" 
         value="{{ old('productoActivo') }}"
         placeholder="producto Activo"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('productoActivo') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="DatosFabricante" 
         value="{{ old('DatosFabricante') }}"
         placeholder="Datos Fabricante"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('DatosFabricante') }}</strong></p>
   </div>
   
     
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="Medidas" 
         value="{{ old('Medidas') }}"
         placeholder="Medidas"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('Medidas') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="UbicacionFisica" 
         value="{{ old('UbicacionFisica') }}"
         placeholder="Ubicacion Fisica"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('UbicacionFisica') }}</strong></p>
   </div>


   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="Referencia" 
         value="{{ old('Referencia') }}"
         placeholder="Referencia"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('Referencia') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="Presentacion" 
         value="{{ old('Presentacion') }}"
         placeholder="Presentacion"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('Presentacion') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="ProductoEquivalente" 
         value="{{ old('ProductoEquivalente') }}"
         placeholder="Producto Equivalente"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('ProductoEquivalente') }}</strong></p>
   </div>


   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="StockMinimo" 
         value="{{ old('StockMinimo') }}"
         placeholder="StockMinimo"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('StockMinimo') }}</strong></p>
   </div>
   
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="StockMaximo" 
         value="{{ old('StockMaximo') }}"
         placeholder="StockMaximo"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('StockMaximo') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="TiempoReposicion" 
         value="{{ old('TiempoReposicion') }}"
         placeholder="TiempoReposicion"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('TiempoReposicion') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="CuentaInventarios" 
         value="{{ old('CuentaInventarios') }}"
         placeholder="CuentaInventarios"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaInventarios') }}</strong></p>
   </div>
   
      
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="CuentaContableIngreso" 
         value="{{ old('CuentaContableIngreso') }}"
         placeholder="CuentaContableIngreso"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaContableIngreso') }}</strong></p>
   </div>
   
         
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="CuentaContableIngresoAjuste" 
         value="{{ old('CuentaContableIngresoAjuste') }}"
         placeholder="CuentaContableIngresoAjuste"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaContableIngresoAjuste') }}</strong></p>
   </div>
   
          
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="DevolucionVentas" 
         value="{{ old('DevolucionVentas') }}"
         placeholder="Devolucion Ventas"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('DevolucionVentas') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="DevolucionCompras" 
         value="{{ old('DevolucionCompras') }}"
         placeholder="Devolucion Compras"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('DevolucionCompras') }}</strong></p>
   </div>

   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="CuentaContableGasto" 
         value="{{ old('CuentaContableGasto') }}"
         placeholder="Cuenta Contable Gasto"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaContableGasto') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="CuentaContableGastoAjuste" 
         value="{{ old('CuentaContableGastoAjuste') }}"
         placeholder="Cuenta Contable Gasto Ajuste"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CuentaContableGastoAjuste') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="ImpuestoCompras" 
         value="{{ old('ImpuestoCompras') }}"
         placeholder="Impuesto Compras"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('ImpuestoCompras') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="ImpuestoVentas" 
         value="{{ old('ImpuestoVentas') }}"
         placeholder="Impuesto Ventas"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('ImpuestoVentas') }}</strong></p>
   </div>



   
   <div class="container mb-5">
      <div class="col-md-4 mx-auto">
         <a href="{{ route('productos') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Cancelar</a>  
   
      <button class="btn btn-success float-right" type="submit">Agregar Producto</button>
      </div>   
   </div>

</form>

