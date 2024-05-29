
@extends('layouts.main', ['title' => 'Departments'])

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Departments</h1>              
        </div>
      </div>
      <div class="d-flex justify-content-end">
          @if(auth()->user()->role === 'admin')
              <a href="{{ URL('/dashboard') }}" class="text-decoration-none text-end btn btn-outline-primary mt-2 mb-2">Go To Dashboard</a>         
          @endif
      </div>
    <div>
        <div class="container-fluid p-2 text-center">
          <div class="row"> 
            <div class="col-12 col-sm-6 col-md-3">
                <div class="p-2">
                  <img src="./images/Pediatrilogy2.jpg" class="d-block w-100" style="max-width: 340px; max-height: 250px;" alt="image-1">
                  <h5>Pediatrilogy</h5>
                  <p>Pediatrics. A doctor of pediatrics—a pediatrician—cares for infants, children, adolescents, and young adults. Pediatricians care for the physical as well ...</p> 
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="p-2">
                  <img src="./images/Ophthalmology.jpg" class="d-block w-100" style="max-width: 340px; max-height: 250px;" alt="image-1">
                  <h5>Ophthalmology</h5>
                  <p>Ophthalmologist. While these physicians are commonly referred to as “eye doctors,” they're known clinically as ophthalmologists. According to the ACS, these ...</p> 
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="p-2">
                  <img src="./images/Gastroenterology.jpg" class="d-block w-100" style="max-width: 340px; max-height: 250px;" alt="image-1">
                  <h5>Gastroenterology</h5>
                  <p>Gastroenterology sit amet, consectetur adipisicing elit. Sint facere ipsa nihil maxime assumenda hic totam facilis quidem libero cupiditate provident incidunt doloribus veritatis, harum laboriosam aperiam accusantium unde minima!</p> 
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="p-2">
                  <img src="./images/Radiology.jpg" class="d-block w-100" style="max-width: 340px; max-height: 250px;" alt="image-1">
                  <h5>Radiology</h5>
                  <p>A radiologist specializes in diagnosing and treating conditions using medical imaging tests. They may read and interpret scans such as X-rays, MRIs ...</p> 
                </div>
              </div>    
            <div class="col-12 col-sm-6 col-md-3">
              <div class="p-2">
                <img src="./images/Oncology.jpg" class="d-block w-100" style="max-width: 340px; max-height: 250px;" alt="image-1">
                <h5>Oncology</h5>
                <p>Oncologist. Oncology specialists care for people with cancer. While hematology-oncologists treat blood cancers, oncologists treat cancers in other bod</p> 
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="p-2">
                <img src="./images/Gynecology.jpg" class="d-block w-100" style="max-width: 340px; max-height: 250px;" alt="image-1">
                <h5>Gynecology</h5>
                <p>Obstetrician/Gynecologist (OB/GYN) A gynecologist is a doctor who specializes in female reproductive health, including menopause and hormone problems. An</p> 
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="p-2">
                <img src="./images/Cardiology.jpg" class="d-block w-100" style="max-width: 340px; max-height: 250px;" alt="image-1">
                <h5>Cardiology</h5>
                <p>Cardiologists are experts in the processes and prevention of heart disease, as well as in ways to improve survival rates and the quality of life for people ...</p> 
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="p-2">
                <img src="./images/Endocrinology.jpg" class="d-block w-100" style="max-width: 340px; max-height: 250px;" alt="image-1">
                <h5>Endocrinology</h5>
                <p>Patients with diabetes and thyroid issues are treated by an endocrinologist. He or she also sees osteoporosis patients as they get older. An endocrinologist is ...</p> 
              </div>
            </div>
            
            <div class="col-12 col-sm-6 col-md-3">
                <div class=" p-2">
                  <img src="./images/neurology.webp" class="d-block w-100" style="max-width: 340px; max-height: 250px;" alt="image-1">
                  <h5>Neurology</h5>
                  <p>maragraph</p> 
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class=" p-2">
                  <img src="./images/psychology.jpg" class="d-block w-100" style="max-width: 340px; max-height: 250px;" alt="image-2">
                  <h5>Psychology</h5>
                  <p>kharagraph</p> 
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="p-2">
                  <img src="./images/dental.jpg" class="d-block w-100" style="max-width: 340px; max-height: 250px;" alt="image-3">
                  <h5>Dental</h5>
                  <p>Naragraph</p> 
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="p-2">
                  <img src="./images/orthopedic.jpg" class="d-block w-100" style="max-width: 340px; max-height: 250px;" alt="image-1">
                  <h5>Orthopedic</h5>
                  <p>Saragraph</p> 
                </div>
              </div>
          </div>
        </div>
        </div>
 @endsection   