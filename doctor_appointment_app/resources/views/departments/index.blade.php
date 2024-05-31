
@extends('layouts.main', ['title' => 'Departments'])

@section('content')
<div class="container-fluid">
  <a href="{{ URL('/dashboard/departments/create') }}" class="btn btn-primary">Add Department</a>
</div>

<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @forelse ($departments as $department)
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{{ $department->name }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $department->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ URL('/dashboard/departments/' . $department->id) }}" class="btn btn-outline-primary">View More</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col text-center">
                <p>No departments found.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
   