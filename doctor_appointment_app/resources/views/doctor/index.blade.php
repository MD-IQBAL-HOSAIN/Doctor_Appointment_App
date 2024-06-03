@extends('layouts.main', ['title' => 'Doctor List'])
@section('content')

    <div class="container-fluid">
        <h1 class="text-center">Find the Doctor</h1>
        @if (isset($doctor_profiles))
        @if (auth()->user()->role == 'admin')
            <div class="d-flex justify-content-between mb-3">
                <a href="{{ route('finddoctor.create') }}" class="btn btn-primary">Add Doctor</a>
            </div>
        @endif
            <table class="table table-striped table-hover table-bordered table-responsive w-100 ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Department</th>
                        <th>Education</th>
                        <th>Experience</th>
                        <th>Fees</th>
                        <th>About</th>
                        <th>Gender</th>
                        <th>Degree</th>
                        <th>University</th>
                        <th>Country</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctor_profiles as $doctor_profile)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $doctor_profile->name }}</td>
                            <td>{{ $doctor_profile->email }}</td>
                            <td><img src="{{ asset('storage/' . $doctor_profile->image) }}" alt="" class="img-fluid" width="50"></td>
                            <td>{{ $doctor_profile->department }}</td>
                            <td>{{ $doctor_profile->education }}</td>
                            <td>{{ $doctor_profile->experience }}</td>
                            <td>{{ $doctor_profile->fees }}</td>
                            <td>{{ $doctor_profile->about }}</td>
                            <td>{{ $doctor_profile->gender }}</td>
                            <td>{{ $doctor_profile->degree }}</td>
                            <td>{{ $doctor_profile->university }}</td>
                            <td>{{ $doctor_profile->country }}</td>
                            <td>{{ $doctor_profile->phone }}</td>
                            <td>{{ $doctor_profile->address }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    @if (auth()->user()->role == 'admin')
                                    <a href="{{ route('finddoctor.edit', $doctor_profile->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                    <form action="{{ route('finddoctor.destroy', $doctor_profile->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $doctor_profiles->links() }}
        @endif
    </div>
@endsection


