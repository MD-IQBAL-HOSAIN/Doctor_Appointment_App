@extends('layouts.main', ['title' => 'Profile'])

@section('content')
@auth
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Users Profile</h1>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <td><strong>Name</strong></td>
                    <td>{{auth()->user()->name}}</td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>{{auth()->user()->email}}</td>
                </tr>
                <tr>
                    <td><strong>Phone</strong></td>
                    <td>{{auth()->user()->phone}}</td>
                </tr>
                <tr>
                    <td><strong>Address</strong></td>
                    <td>{{auth()->user()->address}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endauth
@endsection

