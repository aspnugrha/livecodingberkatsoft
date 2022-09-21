<!-- navigation -->
<header class="sticky-top bg-white border-bottom border-default">
    <div class="container">
 
       <nav class="navbar navbar-expand-lg navbar-white">
          <a class="navbar-brand" href="/">
             Movie
          </a>
          <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
             <i class="ti-menu"></i>
          </button>
 
          <div class="collapse navbar-collapse text-center" id="navigation">
             <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                   <a class="nav-link" href="/home/now_playing">Now Playing</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="/home/popular">Popular</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="/home/top_rated">Top Rated</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="/home/up_coming">Up Coming</a>
                </li>
               
             </ul>

             <ul class="navbar nav ms-auto">
               @auth
               
                 <li class="nav-item dropdown">
                   <a href="" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Welcome back, {{ auth()->user()->name }} 
                   </a>
                   <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a href="/dashboard" class="dropdown-item"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                     <li><hr class="dropdown-divider"></li>
                     <li>
                       <form action="/logout" method="post">
                         @csrf
                         <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                       </form>
                     </li>
                   </ul>
                 </li>
       
               @else 
                 <li class="nav-item">
                   <a href="/login" class="nav-link {{ ($active === "login"? 'active' : '') }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                 </li>
               @endauth
             
             </ul>
             
             {{-- <select class="m-2 border-0" id="select-language">
                <option id="en" value="about/" selected>En</option>
                <option id="fr" value="fr/about/">Fr</option>
             </select> --}}
 
             <!-- search -->
             <div class="search px-4">
                <button id="searchOpen" class="search-btn"><i class="ti-search"></i></button>
                <div class="search-wrapper">
                   <form action="javascript:void(0)" class="h-100">
                      <input class="search-box pl-4" id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                   </form>
                   <button id="searchClose" class="search-close"><i class="ti-close text-dark"></i></button>
                </div>
             </div>
 
          </div>
       </nav>
    </div>
 </header>
 <!-- /navigation -->