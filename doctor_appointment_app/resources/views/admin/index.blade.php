@extends('admin.app', ['title' => 'Admin Dashboard'])
@section('maincontent')

@if (auth()->user()->role == 'admin')
  <div class="container-fluid d-flex justify-content-between mt-1 mb-2">
    <a href="{{ URL('/departments/create') }}" class="btn btn-outline-primary">Add Department</a>
    <a href="{{ URL('/departments/create') }}" class="btn btn-outline-success">Back to Form</a>
</div>
@endif

<div class="container-fluid">
    <table class="table  table-striped table-hover table-bordered ">
        <thead>
            <tr>
                <th>Department Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($departments as $department)
                <tr>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->description }}</td>
                    <td><img src="{{ asset('storage/' . $department->image) }}" alt="" class="img-fluid" style="width:50px; height:50px; object-fit:cover;"></td>
                    <td>
                        @if (auth()->user()->role == 'admin')
                            <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-outline-primary">Edit</a>
                            <form style="display: inline;" action="{{ route('departments.destroy', $department->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this department?');">
                                @csrf
                                @method('DELETE') <!-- Ensure this line is present -->
                                <button class="btn btn-outline-danger" type="submit">Delete</button>
                            </form>                            
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No departments found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $departments->links() }}
</div>
@endsection


