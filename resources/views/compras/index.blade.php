
  
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
          <h1 class="text-center">LISTA DE COMPRAS</h1>

          @include('compras._index')

        </main>

    </section>

  </div>   

</main>

<main class="footer">
  @include('components.footer')
</main>


