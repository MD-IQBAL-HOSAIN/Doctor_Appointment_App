<nav class="navbar navbar-expand-lg mt-1" style="background-color: darkcyan; text-color: white; border-radius: 10px; box-shadow: 0 0 10px 0 black;">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="tel:+987007">Call Us : +987007 | </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="tel:+01587876553"><i class="bi bi-telephone"> +8801587876553 | </i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="mailto:author@example.com"><i class="bi bi-envelope"></i> Email: author@example.com</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-lg-0"> 
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/patient/profile') }}">Profile |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('dashboard') }}">Dashboard |</a>
          </li>          
        <li class="nav-item">
        @if (Route::has('login') && Route::has('logout'))
          @auth
            <li class="nav-item">
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button style="font-size: 1.0rem; color: white" class="nav-link btn btn-outline-warning" type="submit">{{ __('Log out') }}</button>
              </form>
            </li>
          @else
            <li class="nav-item">
              <a style="font-size: 1.0rem; color: white" class="nav-link btn btn-outline-success" href="{{ route('login') }}">{{ __('Login') }} |</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                  <a style="font-size: 1.0rem; color: white" class="nav-link btn btn-outline-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
          @endif
        @endif
        </li>
        </ul>
      </div>
    </div>
  </nav>
