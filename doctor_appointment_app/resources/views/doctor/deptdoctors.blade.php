@extends('layouts.main', ['title' => 'Doctor Lists'])

@section('content')
    <div class="container-fluid">
        @forelse ($department->doctors as $doctor)
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $doctor->image) }}" class="card-img" alt="..." height="450px">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">{{ $doctor->name }}</h3>
                            <p class="card-text">Email: {{ $doctor->email }}</p>
                            {{-- <p class="card-text">Department: {{ $doctor->department_id }}</p> --}}
                            <p class="card-text">Education: {{ $doctor->education }}</p>
                            <p class="card-text">Experience: {{ $doctor->experience }}</p>
                            <p class="card-text">Fees: {{ $doctor->fees }}</p>
                            <p class="card-text">About: {{ $doctor->about }}</p>
                            <p class="card-text">Gender: {{ $doctor->gender }}</p>
                            <p class="card-text">Degree: {{ $doctor->degree }}</p>
                            <p class="card-text">University: {{ $doctor->university }}</p>
                            <p class="card-text">Country: {{ $doctor->country }}</p>
                            <p class="card-text">Phone: {{ $doctor->phone }}</p>
                            <p class="card-text">Address: {{ $doctor->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">No doctor found</h5>
                </div>
            </div>
        @endforelse
    </div>
@endsection
