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
            <h1 class="text-center">Editar producto</h1>

            @include('products._form-edit')

         </main>

      </section>

   </div>   

</main>

<main class="footer">
   @include('components.footer')
</main>

