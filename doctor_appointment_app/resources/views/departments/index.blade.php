
@extends('layouts.main', ['title' => 'Departments'])

@section('content')
@if (auth()->user()->role == 'admin')
  <div class="container-fluid mt-1 mb-2">
    <a href="{{ URL('/departments/create') }}" class="btn btn-primary">Add Department</a>
  </div>
@endif

<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @forelse ($departments as $department)
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{{ $department->name }}</h5>
                    </div>
                    <div class="card-header">
                        <h5 class="card-title">{{ $department->image }}</h5>
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
@if (auth()->user()->role == 'admin')
  <div class="container-fluid d-flex justify-content-between mt-1 mb-2">
    <a href="{{ URL('/dashboard') }}" class="btn btn-outline-primary">Back to Dashboard</a>
    <a href="{{ URL('/departments/create') }}" class="btn btn-outline-success">Back to Form</a>
  </div>
@endif
@endsection
   
