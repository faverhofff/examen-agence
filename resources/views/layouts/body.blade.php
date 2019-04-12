  <!--Main Navigation-->
  <header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">
        <div>
            @yield('title')
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
      @include('layouts.sidebar')
    <!-- Sidebar -->
  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">
      <!--Grid row-->
      <div class="row wow fadeIn">
        @yield('content')
      </div>
      <!--Grid row-->
    </div>
  </main>
  <!--Main layout-->