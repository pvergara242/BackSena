
  
@extends('layouts.panel')


<main class="dashboard">
   <div class="childDashboard">

      <section class="navSuperior">
      @include('components/navSuperior')        
      </section>
            
      <section class="DashboardBody">
         
         <div class=" sidebar">
            @include('components.sidebar')
         </div>

         <main class="ctnBody">
            <h1 class="text-center">REGISTRO DE COMPRA</h1>
            @include('partials.sessions_status')
            @include('compras._form-create')

         </main>

      </section>

   </div>   

</main>

<main class="footer">
   @include('components.footer')
</main>


