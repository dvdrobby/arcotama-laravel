 <!-- Navbar -->

 <nav
 class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
 id="layout-navbar"
>
 <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
   <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
     <i class="bx bx-menu bx-sm"></i>
   </a>
 </div>

 <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
   <!-- Search -->
   <div class="navbar-nav align-items-center">
     <div class="nav-item d-flex align-items-center">
       {{-- <i class="bx bx-search fs-4 lh-0"></i>
       <input
         type="text"
         class="form-control border-0 shadow-none"
         placeholder="Search..."
         aria-label="Search..."
       /> --}}
       <div>Today is {{ date("l") }}, {{ date("d M Y") }}</div>
     </div>
   </div>
   <!-- /Search -->

   <ul class="navbar-nav flex-row align-items-center ms-auto">
     <!-- Place this tag where you want the button to render. -->

     <li class="nav-item lh-1 me-3">
         <div class="btn-group nav-item navbar-dropdown">
            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Admin
            </button>
            <ul class="dropdown-menu">
              <form method="post" action='/auth/logout'>
                @csrf
                <li><button type="submit" class="dropdown-item" href="javascript:void(0);">Log out</button></li>
              </form>
            </ul>
         </div>
     </li>
   </ul>
 </div>
</nav>

<!-- / Navbar -->