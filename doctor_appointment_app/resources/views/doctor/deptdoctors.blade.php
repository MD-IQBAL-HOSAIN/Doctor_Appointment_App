@extends('layouts.main', ['title' => 'Doctor Lists'])

@section('content')   

@forelse ($department->doctors as $doctor)
    {{ $doctor->name }} 
    - {{ $doctor->email }} 
    - {{ $doctor->image }} 
    - {{ $doctor->department_id }} 
    - {{ $doctor->education }} 
    - {{ $doctor->experience }} 
    - {{ $doctor->fees }} 
    - {{ $doctor->about }} 
    - {{ $doctor->gender }} 
    - {{ $doctor->degree }} 
    - {{ $doctor->university }} 
    - {{ $doctor->country }} 
    - {{ $doctor->phone }} 
    - {{ $doctor->address }}
@empty
    
@endforelse


@endsection