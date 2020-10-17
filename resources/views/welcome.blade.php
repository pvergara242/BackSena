@extends('layouts.app')

@section('content')

<<<<<<< HEAD

   <div class="contenedor__todo">

      <div class="caja__trasera">
         <div class="caja__traser-login">
               <h3>
                  Ya tienes cuenta?...
               </h3>
               <p>
                  Inicia sesion para entrar a la pagina 
               </p>
               <button id="btn__iniciar-sesion">
                  Iniciar Sesion
               </button>
         </div>
         <div class="caja__traser-register">
               <h3>
                  aun no tienes cuenta?...
               </h3>
               <p>
                  Registrate para que puedas iniciar sesion  
               </p>
               <button id="btn__iniciar-register">
                  Registrarse
               </button>
         </div>
      </div>

      <div class="contenedor__login-register">

         <form action="" class="formulario__login">
               <h2>Iniciar Sesion</h2>
               <input type="text" placeholder="Correo electronico">
               <input type="password" placeholder="Contraseña">
               <button><a href="/resources/views/sidebar/sidebar.blade.php">Entrar</a></button>
         </form>

         <form class="formulario__register" method="POST" action="/register">
            @csrf
               <h2>Registrarse</h2>
               {{-- <input type="text" placeholder="Nombre Completo"> --}}
               <div class="name">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nombre completo" autofocus>

                  @error('name')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
               </div>

               <div class="email">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo electronico" autofocus>

                  @error('email')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
               </div>

               <div class="password">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="new-password">

                  @error('password')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
               </div>
               
               <div class="repassword">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repetir Contraseña" required autocomplete="new-password">
               </div>

               <div class="submit">
                  <button type="submit" class="btn btn-primary">
                     {{ __('Register') }}
                  </button>
               </div>
         </form>

         <div>
            <p>Esta es una prueba para saber si esta sincronizado el proyecto</p>
         </div>
   </div>

=======
<h1 class="text-center">Contabiliad SENA</h1>
>>>>>>> d446bf45d06d05a9b4eee49ab8486bb89afdf87b

@endsection