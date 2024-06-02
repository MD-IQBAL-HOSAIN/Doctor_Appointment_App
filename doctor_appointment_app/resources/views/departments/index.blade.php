@extends('layouts.main', ['title' => 'Departments'])

@section('content')
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @forelse ($departments as $department)
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{{ $department->name }} Department</h5>
                    </div>
                    <div class="card-header">
                        <h5 class="card-title">
                            <a href="">
                                <img src="{{ asset('storage/' . $department->image) }}" alt="" class="img-fluid" style="width:900px; height:350px; object-fit:contain;">
                            </a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Description : {{ $department->description }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col text-center">
                <p>No departments found.</p>
            </div>
        @endforelse
    </div>

    {{ $departments->links() }}
</div>
@endsection


