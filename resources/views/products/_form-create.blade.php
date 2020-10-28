@include('partials.sessions_status')

<form class="formulario" action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">

   @csrf

   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="document" 
         value="{{ old('document') }}"
         placeholder="Documento"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('document') }}</strong></p>
   </div>

   <div class="inpForm">
      {{-- <input class="form-control" 
         type="number" 
         name="document" 
         value="{{ old('document') }}"
         placeholder="Documento"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('document') }}</strong></p> --}}
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="name" 
         value="{{ old('name') }}"
         placeholder="Primer Nombre"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('name') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="last_name" 
         value="{{ old('last_name') }}"
         placeholder="Segundo Nombre"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('last_name') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="surname" 
         value="{{ old('surname') }}"
         placeholder="Primer apellido"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('surname') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="last_surname" 
         value="{{ old('last_surname') }}"
         placeholder="Segundo apellido"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('last_surname') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="type" 
         value="{{ old('type') }}"
         placeholder="Tipo de usuario"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('type') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="razon_social" 
         value="{{ old('razon_social') }}"
         placeholder="Razon social"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('razon_social') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="pais_code" 
         value="{{ old('pais_code') }}"
         placeholder="Codigo País"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('pais_code') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="departamento_code" 
         value="{{ old('departamento_code') }}"
         placeholder="Codigo Departamento"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('departamento_code') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="municipio_code" 
         value="{{ old('municipio_code') }}"
         placeholder="Codigo Municipio"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('municipio_code') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="address" 
         value="{{ old('address') }}"
         placeholder="Dirección"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('address') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="phone" 
         value="{{ old('phone') }}"
         placeholder="Telefono"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('phone') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="email" 
         value="{{ old('email') }}"
         placeholder="Correo electronico"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('email') }}</strong></p>
   </div>
   <div class="container mb-5">
      <div class="col-md-4 mx-auto">
         <a href="{{ route('cliente') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Cancelar</a>  
   
      <button class="btn btn-success float-right" type="submit">Agregar Cliente</button>
      </div>   
   </div>

</form>

