@forelse ($department->doctors as $doctor)
    {{ $doctor->name }}
@empty
    
@endforelse