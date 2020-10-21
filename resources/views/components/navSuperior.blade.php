<div class="childNavSuperior">

   <div class="boxNavSuperior">
      <h3> CD <span> MC </span></h3>
   </div>

   <div class="cajaNavSuperior">

      <p><i class="fas fa-bars" id="sidebar_btn"></i></p>

      <div class="navTopRight">
         <strong>{{ Auth::user()->name }} &nbsp;</strong>
         <div class="navTopUser">
            <a class="dropdown-item bg-danger" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt text-white py-3"></i>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
            </form>          
         </div>
      </div>
      
   </div>
</div>