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
          <h1 class="text-center">Dashboard Principal</h1>
          to welcome <b>{{ Auth::user()->name }}</b><br>
          your email <b>{{ Auth::user()->email }}</b>
        </main>

    </section>

  </div>   

</main>

<main class="footer">
  @include('components.footer')
</main>

