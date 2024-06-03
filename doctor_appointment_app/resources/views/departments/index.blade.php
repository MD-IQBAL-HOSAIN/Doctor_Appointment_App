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
                            <h5 class="card-title">{{ $department->name }} Department</h5>
                        </div>
                        <div class="card-header">
                            <h5 class="card-title">
                                <a href="">
                                    <img src="{{ asset('storage/' . $department->image) }}" alt="" class="img-fluid"
                                        style="width:900px; height:350px; object-fit:contain;">
                                </a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Description : {{ $department->description }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="btn-group">
                                @if (auth()->user()->role == 'admin')
                                    <a href="{{ route('departments.edit', $department->id) }}"
                                        class="btn btn-outline-primary">Edit</a>
                                    <form style="display: inline;"
                                        action="{{ route('departments.destroy', $department->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this department?');">
                                        @csrf
                                        @method('DELETE') <!-- Ensure this line is present -->
                                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col text-center">
                    <p>No departments found.</p>
                </div>
            @endforelse
        </div>

        {{ $departments->links() }}
    </div>
    @if (auth()->user()->role == 'admin')
        <div class="container-fluid d-flex justify-content-between mt-1 mb-2">
            <a href="{{ URL('/dashboard') }}" class="btn btn-outline-primary">Back to Dashboard</a>
            <a href="{{ URL('/departments/create') }}" class="btn btn-outline-success">Back to Form</a>
        </div>
    @endif
@endsection
