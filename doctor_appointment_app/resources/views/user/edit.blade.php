@extends('layouts.main', ['title' => 'Edit User'])
@section('content')
<div class="container">
    <h1 class="text-center">Edit form</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <!-- Use PATCH method for updating -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" id="role" name="role" aria-label="Role">
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="patient" {{ $user->role == 'patient' ? 'selected' : '' }}>patient</option>
                <option value="doctor" {{ $user->role == 'doctor' ? 'selected' : '' }}>Doctor</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection