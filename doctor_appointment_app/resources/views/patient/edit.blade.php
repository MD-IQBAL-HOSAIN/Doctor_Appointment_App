@extends('layouts.main', ['title' => 'Edit patient Profile'])
@section('content')
<h1 class="text-center">Edit patient Profile</h1>
<div class="container">
    <form action="{{route('patient.update', $patient_profile->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$patient_profile->name}}" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$patient_profile->email}}" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    {{-- <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image" required>
    </div> --}}
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image"> <!-- Allow users to upload a new image -->
        <img src="{{ asset('storage/' . $patient_profile->image) }}" class="img-thumbnail mt-2" alt="Current Image" width="100"> <!-- Display current image -->
    </div>
    
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="text" class="form-control" id="age" name="age" value="{{$patient_profile->age}}" required>
    </div>
    <div class="mb-3">
        <label for="blood_group" class="form-label">Blood Group</label>
        <select class="form-control" id="blood_group" name="blood_group" required>
            <option value="">Select Blood Group</option>
            <option value="A+" {{ $patient_profile->blood_group == 'A+' ? 'selected' : '' }}>A+</option>
            <option value="A-" {{ $patient_profile->blood_group == 'A-' ? 'selected' : '' }}>A-</option>
            <option value="B+" {{ $patient_profile->blood_group == 'B+' ? 'selected' : '' }}>B+</option>
            <option value="B-" {{ $patient_profile->blood_group == 'B-' ? 'selected' : '' }}>B-</option>
            <option value="AB+" {{ $patient_profile->blood_group == 'AB+' ? 'selected' : '' }}>AB+</option>
            <option value="AB-" {{ $patient_profile->blood_group == 'AB-' ? 'selected' : '' }}>AB-</option>
            <option value="O+" {{ $patient_profile->blood_group == 'O+' ? 'selected' : '' }}>O+</option>
            <option value="O-" {{ $patient_profile->blood_group == 'O-' ? 'selected' : '' }}>O-</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="medical_history" class="form-label">Medical History</label>
        <textarea class="form-control" id="medical_history" name="medical_history" required>{{$patient_profile->medical_history}}</textarea>
    </div>
    <div class="mb-3">
        <label for="country" class="form-label">Country</label>
        <input type="text" class="form-control" id="country" name="country" value="{{$patient_profile->country}}" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{$patient_profile->phone}}" required>
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" id="address" name="address" required>{{$patient_profile->address}}</textarea>
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-control" id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="male" {{ $patient_profile->gender == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ $patient_profile->gender == 'female' ? 'selected' : '' }}>Female</option>
            <option value="other" {{ $patient_profile->gender == 'other' ? 'selected' : '' }}>Other</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
