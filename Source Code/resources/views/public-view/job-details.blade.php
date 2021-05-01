@extends('public-layouts.layouts')

@section('title')
Job Details
@endsection

@section('content')
<main>



    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
            data-background="{{ asset('public-theme/assets/img/hero/about.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>{{$jobs->job_title}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-8 col-lg-12">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                <img style="height: 150px; width:150px;"
                                    src="{{asset("uploads/images/$jobs->job_image")}}" alt="">
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{ $jobs->job_title }}</h4>
                                </a>
                                <ul>
                                    <li>{{ $jobs->job_company }}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{ $jobs->job_location }}</li>
                                    <li>{{ $jobs->job_salary}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            <p>{{ $jobs->job_desc }}</p>
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Job Overview</h4>
                        </div>
                        <ul>
                            <li>Location : <span>{{ $jobs->job_location }}</span></li>
                            <li>Salary : <span>{{ $jobs->job_salary }}</span></li>
                        </ul>
                        <div class="apply-btn2">
                            <a href="{{route('applied',$jobs->id)}}" class="btn">Apply Now</a>
                        </div>
                    </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Company Information</h4>
                        </div>
                        <ul>
                            <li>Name: <span>{{ $jobs->job_company }}</span></li>
                            <li>Company Email : <span>{{ $jobs->company_email }}</span></li>
                            <li>Company Phone : <span>{{ $jobs->company_phone }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job post company End -->

</main>
@endsection
