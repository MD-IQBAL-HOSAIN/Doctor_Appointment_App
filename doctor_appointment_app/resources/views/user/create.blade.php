@extends('layouts.main', ['title' => 'Register User'])
@section('content')
<div class="container-fluid">
    <h1>Create form</h1>
<form method="POST" action="{{ route('user.store') }}">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>
        <div class="col-md-6">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" id="role" name="role" required>
                <option value="" disabled selected>Select Role</option>
                <option value="doctor">Doctor</option>
                <option value="patient">patient</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </div>
</form>
</div>
@endsection