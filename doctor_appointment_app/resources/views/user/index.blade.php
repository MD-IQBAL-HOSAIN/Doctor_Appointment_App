@extends('layouts.main', ['title' => 'Users'])
@section('content')
<div class="container">
    <h1 class="text-center">User list page</h1>
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
                <th><a class="btn btn-outline-primary" href="{{ url('/user/create') }}">Add user</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->role }}</td>
                <td>
                    <a class="btn btn-outline-primary" href="{{ route('user.edit', $item->id) }}">Edit</a>
                    <form style="display: inline;" action="{{ route('user.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                    </form>
                </td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
   <div class="container d-flex justify-content-between">
    <a href="{{ URL('/dashboard') }}" class="btn btn-outline-primary ms-2 mt-2 mb-2">Back to Admin Dashboard</a>
    {{ $users->links() }}
   </div>

    </div>
@endsection
