@extends('layouts.main', ['title' => 'Departments Edit'])

@section('content')
<div class="container">
    <h1 class="text-center">Department Edit form</h1>
    <form action="{{ route('departments.update', $department->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Use PUT method for updating -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $department->name }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label"> Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter Department Description" required>{{ $department->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" aria-label="Status" required>
                <option value="1" {{ $department->status == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ $department->status == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
