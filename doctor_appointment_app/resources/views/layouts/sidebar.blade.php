
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i> {{ config('app.name') }}</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle"  src="{{ asset('assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('dashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Buttons</a>
                    <a href="typography.html" class="dropdown-item">Typography</a>
                    <a href="element.html" class="dropdown-item">Other Elements</a>
                </div>
            </div>
            {{-- <a href="{{ url('departments/create') }}" class="btn btn-outline-primary">Add Department</a>   --}}
            <a href="{{ url('departments') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Departments</a>
            <a href="{{ route('appointment.index') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Appointments</a>
            <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Create Appointment</a>
            <a href="{{ route('user.index') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Add Doctor</a>
           
            <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Patient</a>
            <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>View Doctor Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Settings</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="" class="dropdown-item"></a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                           this.closest('form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</div>