@extends('layouts.main', ['title' => 'Find doctor'])
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px; max-height: 300px; display: inline-block;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="./images/doc4.webp" class="img-fluid rounded-start" style="height: 200px; width: auto;" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4>Dr. Musa Al Nabi</h4>
                            <h5 class="card-title">Dermatologist</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Repeat this block three more times for a total of four cards -->
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px; max-height: 300px; display: inline-block;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="./images/doc1.webp" class="img-fluid rounded-start" style="height: 200px; width: auto;" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4>Dr. Md. Sabbir</h4>
                            <h5 class="card-title">Psychiatrist</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of repeated block -->
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px; max-height: 300px; display: inline-block;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="./images/doc2.jpg" class="img-fluid rounded-start" style="height: 200px; width: auto;" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4>Dr. Jabir ibn Haiyan</h4>
                            <h5 class="Orthopedic Doctor">Dentalogist</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of repeated block -->
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px; max-height: 300px; display: inline-block;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="./images/doc3.jpg" class="img-fluid rounded-start" style="height: 200px; width: auto;" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4>Dr. Masudur Rahman</h4>
                            <h5 class="card-title">Nurologist</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of repeated block -->
    </div>
</div>


  
  
  
    
@endsection