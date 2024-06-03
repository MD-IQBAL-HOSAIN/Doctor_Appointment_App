@extends('layouts.main', ['title' => 'Doctor Edit'])

@section('content')
    <div class="container">
        <h1 class="text-center mb-2 mt-1">Edit Doctor</h1>
        <form action="{{ route('finddoctor.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @if ($doctor)
                <div class="form-group mb-2">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $doctor->name }}" required>
                </div>
                <div class="form-group mb-2">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" value="{{ $doctor->email }}" required>
                </div>
                <div class="form-group mb-2">
                    <label for="image">Image:</label>
                    <input type="file" name="image" class="form-control">
                    <img src="{{ asset('storage/' . $doctor->image) }}" class="img-thumbnail mt-2" alt="Current Image" width="100">
                </div>
                <div class="form-group mb-2">
                    <label for="department">Department:</label>
                    <input type="text" name="department" class="form-control" value="{{ $doctor->department }}" required>
                </div>
                <div class="form-group mb-2">
                    <label for="education">Education:</label>
                    <input type="text" name="education" class="form-control" value="{{ $doctor->education }}" required>
                </div>
                <div class="form-group mb-2">
                    <label for="experience">Experience:</label>
                    <input type="text" name="experience" class="form-control" value="{{ $doctor->experience }}" required>
                </div>
                <div class="form-group mb-2">
                    <label for="fees">Fees:</label>
                    <input type="text" name="fees" class="form-control" value="{{ $doctor->fees }}" required>
                </div>
                <div class="form-group mb-2">
                    <label for="about">About:</label>
                    <textarea name="about" class="form-control" required>{{ $doctor->about }}</textarea>
                </div>
                
                <div class="form-group mb-2">
                    <label for="degree">Degree:</label>
                    <input type="text" name="degree" class="form-control" value="{{ $doctor->degree }}" required>
                </div>
                <div class="form-group mb-2">
                    <label for="university">University:</label>
                    <input type="text" name="university" class="form-control" value="{{ $doctor->university }}" required>
                </div>
                <div class="form-group mb-2">
                    <label for="country">Country:</label>
                    <input type="text" name="country" class="form-control" value="{{ $doctor->country }}" required>
                </div>
                <div class="form-group mb-2">
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" class="form-control" value="{{ $doctor->phone }}" required>
                </div>
                <div class="form-group mb-2">
                    <label for="address">Address:</label>
                    <textarea name="address" class="form-control" required>{{ $doctor->address }}</textarea>
                </div>
                <div class="form-group mb-2">
                    <label for="gender">Gender:</label>
                    <select name="gender" class="form-control" required>
                        <option value="men" {{ $doctor->gender == 'men' ? 'selected' : '' }}>Men</option>
                        <option value="women" {{ $doctor->gender == 'women' ? 'selected' : '' }}>Women</option>
                        <option value="other" {{ $doctor->gender == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            @endif
        </form>
    </div>
@endsection
