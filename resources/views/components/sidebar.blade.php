<nav id="sidebar" class="sidebar js-sidebar">
   <div class="sidebar-content js-simplebar">
      <a class="sidebar-brand" href="{{ route('home') }}">
         <span class="align-middle">{{ config('app.name', 'E-Masjid') }}</span>
      </a>

      <ul class="sidebar-nav">
         <li class="sidebar-header">Navigation Menu</li>
         <li class="sidebar-item active">
            <a class="sidebar-link" href="{{ route('home') }}">
               <i class="align-middle" data-feather="home"></i> 
               <span class="align-middle">Home</span>
            </a>
         </li>

         <li class="sidebar-item">
            <a class="sidebar-link" href="#">
               <i class="align-middle" data-feather="bar-chart-2"></i> 
               <span class="align-middle">Charts</span>
            </a>
         </li>
      </ul>
   </div>
</nav>