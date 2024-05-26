<nav class="navbar navbar-expand-lg bg-body-tertiary mb-2 mt-1" style="border-radius: 10px; box-shadow: 0 0 10px 0 black;">
    <div class="container-fluid">
    <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="{{ URL('/') }}" aria-label="Bootstrap">
           <img src="./images/doclogo.jpg" alt="Logo" style="max-width: 60pc; max-height: 60px;">
            <span style="font-size: 1.50rem; font-weight: bold" class=" ">Doctor Appointment</span>
          </a>
      {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ URL('/') }}">Home</a>
          </li>
          <li class="nav-item dropdown ms-auto">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Departments
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ URL('neurology') }}">Neurology</a></li>
              <li><a class="dropdown-item" href="{{ URL('orthopedic') }}">Orthopedic</a></li>
              <li><a class="dropdown-item" href="{{ URL('dental') }}">Dental</a></li>
              <li><a class="dropdown-item" href="{{ URL('psychology') }}">Psychology</a></li>
            </ul>
          </li>
          <li class="nav-item ms-auto">
            <a class="nav-link" href="{{ URL('finddoctor') }}">Find a Doctor</a>
          </li>
          <li class="nav-item ms-auto">
            <a class="nav-link" href="{{ URL('bookappointment') }}">Book Appointment</a>
          </li>
          <li class="nav-item ms-auto">
            <a class="nav-link" href="{{ URL('cart') }}">About Us</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
