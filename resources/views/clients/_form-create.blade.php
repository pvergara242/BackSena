@include('partials.sessions_status')

<form class="formulario" action="" method="POST" enctype="multipart/form-data">

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


   

   

</form>