<h1>index of departments</h1>
@include('inc.shortnav')
@include('inc.navbar')
<div class="container">
    <form action="{{Route('departments.store')}}" method="">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Department Name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label"> Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter Department Description"></textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status" id="status">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @if (Session::has('message')) 
        @if (Session::get('message')['success']) 
            <div class="alert alert-success">
                <strong>Success!</strong>
                <p>{{ session('message')['message'] }}</p>
            </div>
        @else
            <div class="alert alert-danger">
                <strong>Unsuccessful!</strong>
                <p>{{ session('message')['message'] }}</p>
            </div>
        @endif
    @endif
</div>

@include('inc.footer')

