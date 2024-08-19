<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body dir="{{(session()->get('locale') == 'ar' ? 'rtl':'ltr')}}">
    <div id="app">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <!-- Container wrapper -->
  <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar brand -->
          <a class="navbar-brand mt-2 mt-lg-0" href="#">
              <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="15" alt="MDB Logo" loading="lazy" />
          </a>
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link" href="#">Dashboard</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">{{ __('message.Team') }}</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Projects</a>
              </li>
          </ul>
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
          <!-- Language dropdown -->
          <div class="nav-item dropdown">
             <a class="nav-link dropdown-toggle me-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
             @if(session()->get('locale') == 'ar') 
             <img src="\assests/image/saudi.png" class="rounded-circle" width="30" height="30" alt=""> 
             @else <img src="\assests/image/en.png" class="rounded-circle" width="30" height="30" alt=""> 
             @endif 
             </a> 
             <ul class="dropdown-menu "> 
             <li><a class="dropdown-item text-center" href="{{url('language/ar')}}">العربية <img src="\assests/image/saudi.png" class="rounded-circle" width="30" height="30" alt=""> </a></li> 
             <li><a class="dropdown-item text-center" href="{{url('language/en')}}">English<img src="\assests/image/en.png" class="rounded-circle" width="30" height="30" alt=""> </a></li> 
             </ul>
          </div>

          <!-- Notifications -->
          <div class="dropdown">
              <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-0-circle-fill"></i>
                <span class="badge rounded-pill badge-notification bg-danger">{{ Session::get('count') }}</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Some news</a></li>
                  <li><a class="dropdown-item" href="#">Another news</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
          </div>

          <!-- Avatar -->
          <div class="dropdown">
              <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                  <li><a class="dropdown-item" href="#">My profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
          </div>
      </div>
      <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
