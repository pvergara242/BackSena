@extends('layouts.general')

@section('content')

<main class="pc">
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
         <form action="" class="formulario__register">
               <h2>Registrarse</h2>
               <input type="text" placeholder="Nombre Completo">
               <input type="text" placeholder="Correo electronico">
               <input type="text" placeholder="Usuario">
               <input type="password" placeholder="Contraseña">
               <button>Registrarse</button>
         </form>
      </div>
      
   </div>
</main>

<main class="movile">
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
         <form action="" class="formulario__register">
               <h2>Registrarse</h2>
               <input type="text" placeholder="Nombre Completo">
               <input type="text" placeholder="Correo electronico">
               <input type="text" placeholder="Usuario">
               <input type="password" placeholder="Contraseña">
               <button>Registrarse</button>
         </form>
      </div>
      
   </div>
</main>
@endsection