<div class="childSidebar">
   <div class="imgSidebar">
      <img src="{{ asset('img/logo.jpg') }}" alt="Perfil">
      <p class="py-3"> <strong>{{ Auth::user()->name }} &nbsp;</strong></p>
   </div>

   <div class="linksSidebar">
      <li><a href="{{ route('dashboard') }}"><i class="fas fa-shopping-cart"></i><span>Panel</span></a></li>
      <li><a href="{{ route('ventas') }}"><i class="fas fa-shopping-cart"></i><span>Ventas</span></a></li>
      <li><a href="{{ route('cliente') }}"><i class="fas fa-users"></i><span>Creación de terceros</span></a></li>
      <li><a href="{{ route('inventario') }}"><i class="fas fa-dolly-flatbed"></i><span>Registro inventario</span></a></li>
      <li><a href="{{ route('compra') }}"><i class="fas fa-shopping-basket"></i><span>Compras</span></a></li>
      <li><a href="{{ route('producto') }}"><i class="fas fa-shopping-basket"></i><span>Registro de productos</span></a></li>
   </div>
   
  

</div>