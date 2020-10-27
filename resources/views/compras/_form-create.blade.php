@include('partials.sessions_status')

<form class="formulario" action="" method="POST" enctype="multipart/form-data">

   @csrf

   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="codigoComprobante" 
         value="{{ old('codigoComprobante') }}"
         placeholder="codigo Comprobante"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('codigoComprobante') }}</strong></p>
   </div>

   <div class="inpForm">
      {{-- <input class="form-control" 
         type="number" 
         name="NumeroFactura" 
         value="{{ old('NumeroFactura') }}"
         placeholder="Numero Factura"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('NumeroFactura') }}</strong></p> --}}
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="DetalleGeneral" 
         value="{{ old('DetalleGeneral') }}"
         placeholder="Detalle General"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('DetalleGeneral') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="date" 
         name="FechaCompra" 
         value="{{ old('FechaCompra') }}"
         placeholder="Fecha Compra"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('FechaCompra') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="codigoTercero" 
         value="{{ old('codigoTercero') }}"
         placeholder="Codigo Tercero"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('codigoTercero') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="codigoTercero" 
         value="{{ old('NombreTercero') }}"
         placeholder="Nombre Tercero"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('NombreTercero') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="CodigoProducto" 
         value="{{ old(' CodigoProducto') }}"
         placeholder="Codigo Producto "
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CodigoProducto') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="NombreProducto" 
         value="{{ old(' NombreProducto') }}"
         placeholder="Nombre Producto "
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('NombreProducto') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="Cantidades" 
         value="{{ old(' Cantidades') }}"
         placeholder="Cantidades "
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('Cantidades') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="UnidadesDisponibles" 
         value="{{ old(' UnidadesDisponibles') }}"
         placeholder="Unidades Disponibles "
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('UnidadesDisponibles') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="CostoUnitarioCompra" 
         value="{{ old(' CodigCostoUnitarioCompraoProducto') }}"
         placeholder="Costo Unitario Compra"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CostoUnitarioCompra') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="CostoTotal" 
         value="{{ old(' CostoTotal') }}"
         placeholder="CostoTotal "
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CostoTotal') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="TotalImpuestos" 
         value="{{ old(' TotalImpuestos') }}"
         placeholder="Total Impuestos "
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('TotalImpuestos') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="TotalRetenciónFuente" 
         value="{{ old(' TotalRetenciónFuente') }}"
         placeholder="Total Retención de la Fuente "
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('TotalRetenciónFuente') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="CodigoProducto" 
         value="{{ old(' CodigoProducto') }}"
         placeholder="Codigo Producto "
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('CodigoProducto') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="PorcentajeImpuesto" 
         value="{{ old(' PorcentajeImpuesto') }}"
         placeholder="Porcentaje Impuesto "
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('PorcentajeImpuesto') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="PorcentajeRetefte" 
         value="{{ old(' PorcentajeRetefte') }}"
         placeholder="Porcentaje Retefte "
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('PorcentajeRetefte') }}</strong></p>
   </div>

   @include('Custom.message')
          
   <button class="btn btn-success mt-3 mb-2" type="submit">Agregar Compra</button>
   
   <a href="{{ route('compras') }}" class="btn btn-danger mb-5 float-right"><i class="fas fa-window-close"></i> Cancelar</a>   

   
</form>