@extends('layouts.main', ['title' => 'Profile'])

@section('content')
@auth
<div class="container-fluid">
    <div class="row mb-3 mt-3">
        <div class="col-12 col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Users Profile</h1>
                </div>
                <div class="card-body">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Name : {{auth()->user()->name}}</h5>
                            <p class="card-text">Email : {{auth()->user()->email}}</p>
                            <p class="card-text">Phone : {{auth()->user()->phone}}</p>
                            <p class="card-text">Address : {{auth()->user()->address}}</p>
                            <a href="{{ url('myprofile.edit')}}" class="btn btn-primary">Edit</a>

                            {{-- <form action="{{ route('Mprofile.destroy') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> --}}
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
@endauth
@endsection

