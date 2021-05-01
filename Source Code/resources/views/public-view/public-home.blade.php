@extends('public-layouts.layouts')

@section('title')
Home
@endsection


@section('content')


<main>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center"
                data-background="{{asset('public-theme/assets/img/hero/h1_hero.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <h1>Find Your Job And Change Your Life</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                    <div class="row">
                        <div class="col-xl-8">
                            <!-- form -->
                            <form action="{{route('search')}}" type="get" class="search-box">
                                <div class="input-form">
                                    <input name="title" type="text" placeholder="Job Tittle or keyword">
                                </div>
                                <div class="select-form">
                                    <div class="select-itms">
                                        <select name="select" id="select1">
                                            <option>Select Location</option>
                                            @foreach($jobs as $job)
                                            <option value="{{$job->job_location}}">{{$job->job_location}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button class="search-form genric-btn success" type="submit">Find Job</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Our Services Start -->
    <div class="our-services pt-5 mt-5 mb-5">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <h2>Browse Top Categories </h2>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-contnet-center">


                @foreach ($category as $category)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            {{-- <a href="/pub/alljobs/{{$category->id}}"> --}}
                            <a href="{{ route('job.cat',$category->id) }}">
                                <img style="height:150px; width:150px;"
                                    src="{{asset("uploads/images/$category->category_image")}}">
                            </a>

                        </div>
                        <div class="services-cap">
                            <h5><a href="{{route('job.cat',$category->id)}}">{{ $category->category_name }}</a>
                            </h5>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="browse-btn2 text-center mt-30 mb-30">
                        <a href="/pub/alljobs/" class="border-btn2">Browse All Sectors</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services End -->
        <!-- Featured_job_start -->
        {{-- <section class="featured-job-area">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Recent Job</span>
                            <h2>Featured Jobs</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        @foreach ($jobs as $job )
                        <div class="single-job-items mb-30">

                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.html"><img
                                            src="{{asset('public-theme/assets/img/icon/job-list2.png')}}" alt=""></a>
    </div>
    <div class="job-tittle">
        <a href="job_details.html">
            <h4>{{ $job->job_title }}</h4>
        </a>
        <ul>
            <li>Creative Agency</li>
            <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
            <li>$3500 - $4000</li>
        </ul>
    </div>
    </div>
    <div class="items-link f-right">
        <a href="job_details.html">Full Time</a>
        <span>7 hours ago</span>
    </div>

    </div>
    @endforeach
    <!-- single-job-content -->
    </div>
    </div>
    </div>
    </section> --}}
    <!-- Featured_job_end -->
    <!-- How  Apply Process Start-->
    <div class="apply-process-area apply-bg pt-60 pb-60"
        data-background="{{asset('public-theme/assets/img/gallery/how-applybg.png')}}">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle white-text text-center">
                        <span>Apply process</span>
                        <h2> How it works</h2>
                    </div>
                </div>
            </div>
            <!-- Apply Process Caption -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-search"></span>
                        </div>
                        <div class="process-cap">
                            <h5>1. Search a job</h5>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                laborea.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-curriculum-vitae"></span>
                        </div>
                        <div class="process-cap">
                            <h5>2. Apply for job</h5>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                laborea.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="process-cap">
                            <h5>3. Get your job</h5>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                laborea.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How  Apply Process End-->
</main>


@endsection
