
@extends('layouts.main', ['title' => 'Departments'])

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Departments</h1>
            <a href="{{ url('departments/create') }}" class="btn btn-outline-primary">Add Department</a>    
        </div>
    </div>
</div>
@endsection


