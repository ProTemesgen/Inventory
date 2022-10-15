<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
        
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<!-- Styles -->
        

        <style>
            body {
background-color: #fbfbfb;
}
@media (min-width: 991.98px) {
main {
padding-left: 240px;
}
}

/* Sidebar */
.sidebar {
position: fixed;
top: 0;
bottom: 0;
left: 0;
padding: 58px 0 0; /* Height of navbar */
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
width: 240px;
z-index: 600;
}

@media (max-width: 991.98px) {
.sidebar {
width: 100%;
}
}
.sidebar .active {
border-radius: 5px;
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
position: relative;
top: 0;
height: calc(100vh - 48px);
padding-top: 0.5rem;
overflow-x: hidden;
overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}
        </style>
        @livewireStyles
    </head>
    <body class="antialiased">
        <div>
            <!--Main Navigation-->
          <header>
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
              <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                  <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
                  </a>
                  <a href="/asset" class="list-group-item list-group-item-action py-2 ripple active">
                    <i class="fas fa-chart-area fa-fw me-3"></i><span>Mange Assets</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                      class="fas fa-lock fa-fw me-3"></i><span>Manage Branches</span></a>
                  <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                      class="fas fa-chart-line fa-fw me-3"></i><span>Manage Employeies</span></a>
                  <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-pie fa-fw me-3"></i><span>Manage Customer</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                      class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a>
                  <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                      class="fas fa-globe fa-fw me-3"></i><span>International</span></a>
                  <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                      class="fas fa-building fa-fw me-3"></i><span>Partners</span></a>
                  <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                      class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a>
                  <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                      class="fas fa-users fa-fw me-3"></i><span>Users</span></a>
                  <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                      class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a>
                </div>
              </div>
            </nav>
            <!-- Sidebar -->

            <!-- Navbar -->
            <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
              <!-- Container wrapper -->
              <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                  aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="#">
                  <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="25" alt="MDB Logo"
                    loading="lazy" />
                </a>
                <!-- Search form -->
                <form class="d-none d-md-flex input-group w-auto my-auto">
                  <input autocomplete="off" type="search" class="form-control rounded"
                    placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px;" />
                  <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
                </form>

                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">
                  <!-- Notification dropdown -->
                  <li class="nav-item dropdown">
                    <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                      role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-bell"></i>
                      <span class="badge rounded-pill badge-notification bg-danger">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                      <li>
                        <a class="dropdown-item" href="#">Some news</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Another news</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </li>
                    </ul>
                  </li>

                  <!-- Icon -->
                  <li class="nav-item">
                    <a class="nav-link me-3 me-lg-0" href="#">
                      <i class="fas fa-fill-drip"></i>
                    </a>
                  </li>
                  <!-- Icon -->
                  <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="#">
                      <i class="fab fa-github"></i>
                    </a>
                  </li>

                  <!-- Icon dropdown -->
                  <li class="nav-item dropdown">
<<<<<<< HEAD
                    <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown"
                      role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                      <i class="united kingdom flag m-0"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <li>
                        <a class="dropdown-item" href="#"><i class="united kingdom flag"></i>English
                          <i class="fa fa-check text-success ms-2"></i></a>
                      </li>
                      <li>
                        <hr class="dropdown-divider" />
=======
                    <a
                      class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-mdb-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <i class="flag-united-kingdom flag m-0"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <li>
                        <a class="dropdown-item" href="#"
                          ><i class="flag-united-kingdom flag"></i>English
                          <i class="fa fa-check text-success ms-2"></i
                        ></a>
>>>>>>> 3b97d278bdf4e983a24310547faa334680f356f5
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
                      </li>
                    </ul>
                  </li>

                  <!-- Avatar -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                      id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle"
                        height="22" alt="Avatar" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                      <li>
                        <a class="dropdown-item" href="#">My profile</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Settings</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Logout</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <!-- Container wrapper -->
            </nav>
            <!-- Navbar -->
          </header>
          <!--Main Navigation-->

          <!--Main layout-->
          <main style="margin-top: 58px;">
            <div class="container pt-4">{{$slot}}</div>
          </main>
          <!--Main layout-->
        </div>
        @livewireScripts
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    </body>
</html>
