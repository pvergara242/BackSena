@include('partials.sessions_status')

<form class="formulario" action="{{ route('cliente.update', $client->id) }}" method="POST">
   @csrf
   @method('PATCH')

   <div class="inpForm">
      {{-- <input class="form-control" 
         type="number" 
         name="codigoComprobante" 
         value="{{ $compras->codigoComprobante}}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('codigoComprobante') }}</strong></p> --}}
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="NumeroFactura" 
         value="{{ $compras->NumeroFactura }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('naNumeroFacturame') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="DetalleGeneral" 
         value="{{ $compras->DetalleGeneral }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('DetalleGeneral') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="FechaCompra" 
         value="{{ $compras->FechaCompra }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('FechaCompra') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="codigoTercero" 
         value="{{ $compras->codigoTercero }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('codigoTercero') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="codigoTercero" 
         value="{{ $compras->codigoTercero }}"
      >
      <p class="number-danger number-center "><strong>{{ $errors->first('codigoTercero') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="CodigoProducto" 
         value="{{ $compras->CodigoProducto }}"
      >
      <p class="number-danger number-center "><strong>{{ $errors->first('CodigoProducto') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="NombreProducto" 
         value="{{ $compras->NombreProducto }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('NombreProducto') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="departamento_code" 
         value="{{ $client->departamento_code }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('departamento_code') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="municipio_code" 
         value="{{ $client->municipio_code }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('municipio_code') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="address" 
         value="{{ $client->address }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('address') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="phone" 
         value="{{ $client->phone }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('phone') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="phone" 
         value="{{ $client->phone }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('phone') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="email" 
         value="{{ $client->email }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('email') }}</strong></p>
   </div>
   <div class="container mb-5">
      <div class="col-md-4 mx-auto">
         <a href="{{ route('cliente') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Cancelar</a>  
   
      <button class="btn btn-success float-right" type="submit">Editar Cliente</button>
      
      </div>   
   </div>


</form>
