

<form class="formulario" action="{{ route('compra.store') }}" method="POST" enctype="multipart/form-data">

@csrf

<div class="inpForm">
   <input class="form-control" 
      type="number" 
      name="CodigoComprobante" 
      value="{{ old('CodigoComprobante') }}"
      placeholder="CodigoComprobante"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('CodigoComprobante') }}</strong></p>
</div>

<div class="inpForm">
   <input class="form-control" 
      type="number" 
      name="numeroFactura" 
      value="{{ old('numeroFactura') }}"
      placeholder="numeroFactura"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('numeroFactura') }}</strong></p>
</div>

<div class="inpForm">
   <input class="form-control" 
      type="text" 
      name="DetalleGeneral" 
      value="{{ old('DetalleGeneral') }}"
      placeholder="DetalleGeneral"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('DetalleGeneral') }}</strong></p>
</div>

<div class="inpForm">
   <input class="form-control" 
      type="date" 
      name="FechaCompra" 
      value="{{ old('FechaCompra') }}"
      placeholder="FechaCompra"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('FechaCompra') }}</strong></p>
</div>

<div class="inpForm">
   <input class="form-control" 
      type="text" 
      name="CodigoTercero" 
      value="{{ old('CodigoTercero') }}"
      placeholder="CodigoTercero"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('CodigoTercero') }}</strong></p>
</div>

<div class="inpForm">
   <input class="form-control" 
      type="text" 
      name="nombreTercero" 
      value="{{ old('nombreTercero') }}"
      placeholder="nombreTercero"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('nombreTercero') }}</strong></p>
</div>

<div class="inpForm">
   <input class="form-control" 
      type="number" 
      name="codigoProducto" 
      value="{{ old('codigoProducto') }}"
      placeholder="codigoProducto"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('codigoProducto') }}</strong></p>
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
      name="Cantidades" 
      value="{{ old('Cantidades') }}"
      placeholder="Cantidades"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('Cantidades') }}</strong></p>
</div>

<div class="inpForm">
   <input class="form-control" 
      type="number" 
      name="unidadesDisponibles" 
      value="{{ old('unidadesDisponibles') }}"
      placeholder="unidadesDisponibles"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('unidadesDisponibles') }}</strong></p>
</div>

  
<div class="inpForm">
   <input class="form-control" 
      type="number" 
      name="CostoUnitarioCompra" 
      value="{{ old('CostoUnitarioCompra') }}"
      placeholder="CostoUnitarioCompra"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('CostoUnitarioCompra') }}</strong></p>
</div>

<div class="inpForm">
   <input class="form-control" 
      type="number" 
      name="CostoTotalCompra" 
      value="{{ old('CostoTotalCompra') }}"
      placeholder="CostoTotalCompra"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('CostoTotalCompra') }}</strong></p>
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
      type="number" 
      name="Impuestos" 
      value="{{ old('Impuestos') }}"
      placeholder="Impuestos"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('Impuestos') }}</strong></p>
</div>

<div class="inpForm">
   <input class="form-control" 
      type="number" 
      name="Porcentajeimpuesto" 
      value="{{ old('Porcentajeimpuesto') }}"
      placeholder="Porcentajeimpuesto"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('Porcentajeimpuesto') }}</strong></p>
</div>


<div class="inpForm">
   <input class="form-control" 
      type="number" 
      name="TotalImpuestos" 
      value="{{ old('TotalImpuestos') }}"
      placeholder="TotalImpuestos"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('TotalImpuestos') }}</strong></p>
</div>


<div class="inpForm">
   <input class="form-control" 
      type="text" 
      name="RetencionFuente" 
      value="{{ old('RetencionFuente') }}"
      placeholder="RetencionFuente"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('RetencionFuente') }}</strong></p>
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
      name="PorcentajeRetefte" 
      value="{{ old('PorcentajeRetefte') }}"
      placeholder="PorcentajeRetefte"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('PorcentajeRetefte') }}</strong></p>
</div>

   
<div class="inpForm">
   <input class="form-control" 
      type="text" 
      name="TotalRetenciónFuente" 
      value="{{ old('TotalRetenciónFuente') }}"
      placeholder="TotalRetenciónFuente"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('TotalRetenciónFuente') }}</strong></p>
</div>

<div class="container mb-5">
   <div class="col-md-4 mx-auto">
      <a href="{{ route('compra') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Cancelar</a>  

   <button class="btn btn-success float-right" type="submit">REGISTRAR</button>
   </div>   
</div>

</form>


