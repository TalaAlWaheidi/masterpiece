@extends('public-layouts.layouts')

@section('title')
All Jobs
@endsection


@section('content')

<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center"
        data-background="{{ asset('public-theme/assets/img/hero/about.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>{{ $categories->category_name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
<!-- Job List Area Start -->
<div class="job-listing-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <!-- Left content -->

            <!-- Right content -->
            <div class="col-xl-9 col-lg-9 col-md-8">
                <!-- Featured_job_start -->
                <section class="featured-job-area">
                    <div class="container">
                        @foreach ($jobs as $value)

                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    {{-- <a href="/pub/alljobs/details/{{$value->id}}"> --}}
                                    <a href="{{ route('job.details',$value->id) }}">
                                        <img src="{{asset("uploads/images/$value->job_image")}}" alt=""></a>
                                </div>
                                <div class="job-tittle job-tittle2">
                                    <a href="{{ route('job.details',$value->id) }}">
                                        <h4>{{ $value->job_title }}</h4>
                                    </a>
                                    <ul>
                                        <li>{{ $value->job_company }}</li>
                                        <li style="margin-right:38px"><i
                                                class="fas fa-map-marker-alt"></i>{{ $value->job_location }}</li>
                                        <li>{{ $value->job_salary }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link items-link2 f-right">
                                <a href="{{route('applied',$value->id)}}">Apply Now</a>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </section>
                <!-- Featured_job_end -->
            </div>
        </div>
    </div>
</div>
<!-- Job List Area End -->
<!--Pagination Start  -->
{{-- <div class="pagination-area pb-115 text-center">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xl-12">--}}
{{--                <div class="single-wrap d-flex justify-content-center">--}}
{{--                    <nav aria-label="Page navigation example">--}}
{{--                        <ul class="pagination justify-content-start">--}}
{{--                            <li class="page-item active"><a class="page-link" href="#">01</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">02</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">03</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!--Pagination End  -->

@endsection
