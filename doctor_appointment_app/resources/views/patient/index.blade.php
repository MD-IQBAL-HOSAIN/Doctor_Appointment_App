@extends('layouts.main', ['title' => 'patient list'])

@section('content') 

<div class="container-fluid">
    <div><h2 class="text-center">Patient Table</h2></div>
    <div>
        <a href="{{ route('patient.create') }}" class="btn btn-outline-success">Add patient</a>
    </div>
    <div class="row">
        @foreach ($patient_profiles as $patient_profile)
        <div class="col-md-4">
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $patient_profile->image) }}" class="card-img" alt="..." width="200" height="250">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Name: {{ $patient_profile->name }}</h5>
                            <p class="card-text">Email: {{ $patient_profile->email }}</p>
                            <p class="card-text">Age: {{ $patient_profile->age }}</p>
                            <p class="card-text">Blood_group: {{ $patient_profile->blood_group }}</p>
                            <p class="card-text">Gender: {{ $patient_profile->gender }}</p>
                            <p class="card-text">Country: {{ $patient_profile->country }}</p>
                            <p class="card-text">Phone: {{ $patient_profile->phone }}</p>
                            <p class="card-text">Address: {{ $patient_profile->address }}</p>
                            <p class="card-text">Medical History: {{ $patient_profile->medical_history }}</p>
                            <a href="{{ route('patient.edit', $patient_profile->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('patient.destroy', $patient_profile->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{ $patient_profiles->links() }}
</div>
@endsection


{{-- it is worked correctly --}}
{{-- <div class="container-fluid">
    <div>
        <a href="{{ route('patient.create') }}" class="btn btn-success">Add patient</a>
    </div>
    @if(isset($patient_profiles))
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Image</th>
                <th scope="col">Age</th>
                <th scope="col">Blood Group</th>
                <th scope="col">Gender</th>
                <th scope="col">Country</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patient_profiles as $patient_profile)
            <tr>
                <td>{{ $patient_profile->name }}</td>
                <td>{{ $patient_profile->email }}</td>
                <td><img src="{{ asset('images/' . $patient_profile->image) }}" width="100" height="100"/></td>
                <td>{{ $patient_profile->age }}</td>
                <td>{{ $patient_profile->blood_group }}</td>
                <td>{{ $patient_profile->gender }}</td>
                <td>{{ $patient_profile->country }}</td>
                <td>{{ $patient_profile->phone }}</td>
                <td>{{ $patient_profile->address }}</td>
                <td>
                    <a href="{{ route('patient.edit', $patient_profile->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('patient.destroy', $patient_profile->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div> --}}



