<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel - لوحة القيادة</title>
</head>
<body>
    <header>
         <!-- Navbar -->
         <nav class="navbar navbar-expand-lg bg-dark text-white">
          <!-- Container wrapper -->
          <div class="container-fluid">
              <!-- Toggle button -->
              <button data-mdb-collapse-init class="navbar-toggler" type="button"
                  data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
              </button>

              <!-- Collapsible wrapper -->
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Navbar brand -->
                  <a class="navbar-brand mt-2 mt-lg-0" href="#">

                  </a>
                  <!-- Left links -->
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a class="nav-link" href="#"><span class="text-white">Dashboard</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#"><Span class="text-white">{{__('message.Team')}}</Span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#"><Span class="text-white">Projects</Span></a>
                      </li>
                  </ul>
                  <!-- Left links -->
              </div>
              <!-- Collapsible wrapper -->

              <!-- Right elements -->
              <div class="d-flex align-items-center">
                <h6> welcome {{ Auth::user()->name }}</h6>
                <a class="button" href="{{route('logout')}}">Logout</a>
              </div>
              <!-- Right elements -->
          </div>
          <!-- Container wrapper -->
      </nav>
      <!-- Navbar -->
    </header>

    <main>
            <div class="row">
                <div class="col-auto col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark"> <!-- for left side bar -->
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">Menu</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="{{route('index')}}" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-white">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('products')}}" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline text-white">Product</span> </a>
                               
                            </li>
                            <li>
                            
                                <a href="{{route('productDetails')}}" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-white">Product details</span></a>
                            </li>
                            <li>
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline text-white">Cart</span></a>
                
                            </li>
                            <li>
                                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline text-white">Invooice</span> </a>
                                   
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline text-white">Customers</span> </a>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown pb-4">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">loser</span>
                            </a>
                           
                        </div>
                    </div>

                </div>

                <div class="col-auto col-sm-8 col-xl-6 px-sm-6 px-0"> <!-- for content -->
                    @yield('content')
                    
                </div>
            </div>
    </main>

    <footer>

    </footer>
    
</body>
</html>