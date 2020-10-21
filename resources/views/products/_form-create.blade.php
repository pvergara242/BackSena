@include('partials.sessions_status')

<form class="formulario" action="" method="POST" enctype="multipart/form-data">

   @csrf

   <div class="inpForm">
      <input class="form-control" 
         type="number" 
         name="codigo" 
         value="{{ old('codigo') }}"
         placeholder="Codigo"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('codigo') }}</strong></p>
   </div>

   <div class="inpForm">
      {{-- <input class="form-control" 
         type="number" 
         name="Unidad" 
         value="{{ old('Unidad') }}"
         placeholder="Unidad"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('Unidad') }}</strong></p> --}}
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="name" 
         value="{{ old('name') }}"
         placeholder="Nombre"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('name') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="description" 
         value="{{ old('description') }}"
         placeholder="descripcion"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('description') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="especificaciones" 
         value="{{ old('especificaciones') }}"
         placeholder="Especificaciones"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('especificaciones') }}</strong></p>
   </div>

   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="cantidad" 
         value="{{ old('cantidad') }}"
         placeholder="Cantidad"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('cantidad') }}</strong></p>
   </div>
   
   <div class="inpForm">
      <input class="form-control" 
         type="text" 
         name="productos equivalentes" 
         value="{{ old('productos equivalentes') }}"
         placeholder="productos equivalentes"
      >
      <p class="text-danger text-center "><strong>{{ $errors->first('productos equivalentes') }}</strong></p>
   </div>

   @include('Custom.message')
          
   <button class="btn btn-success mt-3 mb-2" type="submit">Agregar Cliente</button>
   
   <a href="{{ route('cliente') }}" class="btn btn-danger mb-5 float-right"><i class="fas fa-window-close"></i> Cancelar</a>   

   
</form>