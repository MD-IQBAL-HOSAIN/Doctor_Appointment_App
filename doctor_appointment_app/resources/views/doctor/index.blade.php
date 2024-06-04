@extends('layouts.main', ['title' => 'Doctor List'])
@section('content')

    <div class="container-fluid">
        <div>
            <h1 class="text-center">Find the doctor</h1>
        </div>
        @if (isset($doctor_profiles))
            @if (auth()->user()->role == 'admin')
                <div class="d-flex justify-content-between mb-3">
                    <a href="{{ route('finddoctor.create') }}" class="btn btn-primary">Add Doctor</a>
                </div>
            @endif
            <div class="row">
                @foreach ($doctor_profiles as $doctor_profile)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $doctor_profile->image) }}"
                                class="card-img-top border border-radius-50"
                                style="object-fit: cover; width: 300px; height: 300px; border-radius: 80%"
                                alt="{{ $doctor_profile->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $doctor_profile->name }}</h5>
                                <p class="card-text"><strong>Email:</strong> {{ $doctor_profile->email }}</p>
                                <p class="card-text"><strong>Department:</strong> {{ $doctor_profile->department_id }}</p>
                                <p class="card-text"><strong>Education:</strong> {{ $doctor_profile->education }}</p>
                                <p class="card-text"><strong>Experience:</strong> {{ $doctor_profile->experience }} years
                                </p>
                                <p class="card-text"><strong>Fees:</strong> {{ $doctor_profile->fees }}</p>
                                {{-- <p class="card-text"><strong>About:</strong> {{ $doctor_profile->about }}</p> --}}
                                {{-- <p class="card-text"><strong>Gender:</strong> {{ $doctor_profile->gender }}</p> --}}
                                <p class="card-text"><strong>Degree:</strong> {{ $doctor_profile->degree }}</p>
                                <p class="card-text"><strong>University:</strong> {{ $doctor_profile->university }}</p>
                                <p class="card-text"><strong>Country:</strong> {{ $doctor_profile->country }}</p>
                                <p class="card-text"><strong>Degree:</strong> {{ $doctor_profile->degree }}</p>
                                <p class="card-text"><strong>Country:</strong> {{ $doctor_profile->country }}</p>
                                <p class="card-text"><strong>Phone:</strong> {{ $doctor_profile->phone }}</p>


                                @if (auth()->user()->role == 'admin')
                                    <div class="mt-2">
                                        <a href="{{ route('finddoctor.edit', $doctor_profile->id) }}"
                                            class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('finddoctor.destroy', $doctor_profile->id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                        <a href="#" class="btn btn-primary">Book Appointment</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $doctor_profiles->links() }}
        @endif
    </div>
@endsection
