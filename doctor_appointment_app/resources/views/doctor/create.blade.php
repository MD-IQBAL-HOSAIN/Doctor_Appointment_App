@extends('layouts.main', ['title' => 'Doctor Create'])

@section('content')
    <div class="container">
        <h1 class="text-center mb-2 mt-1">Add Doctor</h1>
        <form action="{{ route('finddoctor.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            <div class="form-group mb-2">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>
            <div class="form-group mb-2">
                <label for="image">Image:</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <div class="form-group mb-2">
                <label for="department">Department:</label>
                {{-- <input type="text" name="department" class="form-control" value="{{ old('department') }}" required> --}}
                <select name="department" class="form-control" required>
                    <option value="">Select Department</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->name }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="education">Education:</label>
                <input type="text" name="education" class="form-control" value="{{ old('education') }}" required>
            </div>
            <div class="form-group mb-2">
                <label for="experience">Experience:</label>
                <input type="text" name="experience" class="form-control" value="{{ old('experience') }}" required>
            </div>
            <div class="form-group mb-2">
                <label for="fees">Fees:</label>
                <input type="text" name="fees" class="form-control" value="{{ old('fees') }}" required>
            </div>
            <div class="form-group mb-2">
                <label for="about">About:</label>
                <textarea name="about" class="form-control" required>{{ old('about') }}</textarea>
            </div>
            
            <div class="form-group mb-2">
                <label for="degree">Degree:</label>
                <input type="text" name="degree" class="form-control" value="{{ old('degree') }}" required>
            </div>
            <div class="form-group mb-2">
                <label for="university">University:</label>
                <input type="text" name="university" class="form-control" value="{{ old('university') }}" required>
            </div>
            <div class="form-group mb-2">
                <label for="country">Country:</label>
                <input type="text" name="country" class="form-control" value="{{ old('country') }}" required>
            </div>
            <div class="form-group mb-2">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
            </div>
            <div class="form-group mb-2">
                <label for="address">Address:</label>
                <textarea name="address" class="form-control" required>{{ old('address') }}</textarea>
            </div>
            <div class="form-group mb-2">
                <label for="gender">Gender:</label>
                <select name="gender" class="form-control" required>
                    <option value="men" {{ old('gender') == 'men' ? 'selected' : '' }}>Men</option>
                    <option value="women" {{ old('gender') == 'women' ? 'selected' : '' }}>Women</option>
                    <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ URL('/dashboard') }}" class="btn btn-danger">Back to Dashboard</a>
            </div>
        </form>
    </div>
@endsection

