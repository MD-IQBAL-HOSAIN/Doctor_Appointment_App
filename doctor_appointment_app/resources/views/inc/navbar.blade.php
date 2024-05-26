<div class="mb-1 mt-1">
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="border-radius: 10px; box-shadow: 0 0 10px 0 black;">
  <div class="container-fluid">
    <div class="d-flex flex-row-reverse">
      <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="{{ URL('/') }}" aria-label="Bootstrap">
        <img src="./images/doclogo.jpg" alt="Logo" style="max-width: 60pc; max-height: 60px;">
        <span style="font-size: 1.50rem; font-weight: bold" class=" ">Doctor Appointment</span>
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Departments
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ URL('neurology') }}">neurology</a></li>
            <li><a class="dropdown-item" href="{{ URL('orthopedic') }}">Orthopedic</a></li>
            <li><a class="dropdown-item" href="{{ URL('dental') }}">Dental</a></li>
            <li><a class="dropdown-item" href="{{ URL('psychology') }}">Psychology</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL('finddoctor') }}">Find a Doctor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL('bookappointment') }}">Book Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL('cart') }}">About Us</a>
        </li>
        <li>
        @if (Route::has('login') && Route::has('logout'))
          @auth
            <li class="nav-item">
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="nav-link" type="submit">{{ __('Log out') }}</button>
              </form>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
          @endauth
        @endif
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
