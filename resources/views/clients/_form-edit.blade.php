@include('partials.sessions_status')

<form class="formulario" action="{{ route('cliente.update', $client->id) }}" method="POST">
   @csrf
   @method('PATCH')

   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="document" 
         value="{{ $client->document }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('document') }}</strong></p>
   </div>

   <div class="inpForm">
      {{-- <input class="form-control" 
         type="number" 
         name="document" 
         value="{{ $client-> }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('document') }}</strong></p> --}}
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="name" 
         value="{{ $client->name }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('name') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="last_name" 
         value="{{ $client->last_name }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('last_name') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="surname" 
         value="{{ $client->surname }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('surname') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="last_surname" 
         value="{{ $client->last_surname }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('last_surname') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="type" 
         value="{{ $client->type }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('type') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="razon_social" 
         value="{{ $client->razon_social }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('razon_social') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="pais_code" 
         value="{{ $client->pais_code }}"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('pais_code') }}</strong></p>
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
