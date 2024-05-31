@extends('layouts.main', ['title' => 'Departments Form'])
@section('content')  

<div class="container-fluid">     
    <h4 class="text-center mt-2">Department Form</h4> 
 <div class="container">
    <form action="{{Route('departments.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Department Name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label"> Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter Department Description"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status" id="status">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <div class="d-flex justify-content-between">
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            @if (auth()->user()->role == 'admin')
                <div>
                <a href="{{ URL('/dashboard') }}" class="btn btn-primary">Back to Dashboard</a>
                </div>
            @endif
        </div>
    </form>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        <meta http-equiv="refresh" content="1;url={{ route('departments.index') }}" />
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <meta http-equiv="refresh" content="1;url={{ route('departments.index') }}" />
    @endif
 </div>
</div>
@endsection

