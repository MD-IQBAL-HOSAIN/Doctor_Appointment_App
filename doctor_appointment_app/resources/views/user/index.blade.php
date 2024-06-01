@extends('layouts.main', ['title' => 'Users'])
@section('content')
<div class="container">
    <h1 class="text-center">User list page</h1>
    <div>
        <a class="btn btn-outline-primary mt-2 mb-2" href="{{ url('/user/create') }}">Add user</a>
    </div>
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>                
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
                    <form style="display: inline;" action="{{ route('user.destroy', $item->id) }}" method="POST"
                        onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit"
                            onclick="return confirm('Are you sure Are you sure want to delete?')">Delete</button>
                    </form>
                </td>
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
