<div class="mb-1 mt-1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="border-radius: 10px; box-shadow: 0 0 10px 0 black;">
  <div class="container-fluid">

    {{-- logo start--}}
    <div class="d-flex flex-row-reverse">
      <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="{{ URL('/') }}" aria-label="Bootstrap">
        <img src="./images/doclogo.jpg" alt="Logo" style="max-width: 150px; max-height: 70px;">
        <span style="font-size: 1.5rem; font-weight: bold" class=" ">Doctor<br>Appointment</span>
      </a>
    </div>
     {{-- logo end--}}

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        {{-- <li class="nav-item dropdown drop-style">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <strong style="font-size: 1.2rem;">Departments</strong>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ URL('neurology') }}"><strong style="font-size: 1.1rem;">Neurology</strong></a></li>
            <li><a class="dropdown-item" href="{{ URL('orthopedic') }}"><strong style="font-size: 1.1rem;">Orthopedic</strong></a></li>
            <li><a class="dropdown-item" href="{{ URL('dental') }}"><strong style="font-size: 1.1rem;">Dental</strong></a></li>
            <li><a class="dropdown-item" href="{{ URL('psychology') }}"><strong style="font-size: 1.1rem;">Psychology</strong></a></li>
          </ul>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ URL('departments') }}"><strong style="font-size: 1.2rem;">Departments</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL('finddoctor') }}"><strong style="font-size: 1.2rem;">Find a Doctor</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL('bookappointment') }}"><strong style="font-size: 1.2rem;">Book Appointment</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL('aboutus') }}"><strong style="font-size: 1.2rem;">About Us</strong></a>
        </li>
        <li>
        @if (Route::has('login') && Route::has('logout'))
          @auth
            <li class="nav-item">
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="nav-link" type="submit"><strong style="font-size: 1.2rem;">{{ __('Log out') }}</strong></button>
              </form>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}"><strong style="font-size: 1.2rem;">{{ __('Login') }}</strong></a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}"><strong style="font-size: 1.2rem;">{{ __('Register') }}</strong></a>
                </li>
            @endif
          @endif
        @endif
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><strong style="font-size: 1.2rem;">Search</strong></button>
      </form>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
