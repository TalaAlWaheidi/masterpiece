@extends('public-layouts.layouts')

@section('title')
Applied Job
@endsection

@section('content')
<div class="whole-wrap">
    <div class="container box_1170">

        <div class="section-top-border">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8">
                    <h3 class="mb-30 text-center">Applied Job Form</h3>
                    <form action="{{route('applied.store',$job->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-10">
                            <input type="text" name="name" placeholder="Full Name" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'First Name'" value="{{ old('name') }}" class="single-input">
                        </div>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mt-10">
                            <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Email address'" value="{{ old('email') }}" class="single-input">
                        </div>
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mt-10">
                            <input type="text" name="phone" placeholder="Your Phone" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Your Phone'" value="{{ old('phone') }}" class="single-input">
                        </div>
                        @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mt-10">
                            <input type="text" name="desability" placeholder="Your Desability"
                                onfocus="this.placeholder = ''" value="{{ old('desability') }}" onblur="this.placeholder = 'Your Desability'"
                                class="single-input">
                        </div>
                        @error('desability')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group-icon mt-10">
{{--                            <i class="far fa-address-book"></i>--}}
                            <div class="icon"><i class="far fa-address-book" aria-hidden="true"></i></div>
                            <input type="file" name="CV" placeholder="Upload Your CV" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Upload Your CV'" value="{{ old('cv') }}" class="single-input">
                        </div>
                        @error('cv')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group-icon mt-10">
{{--                            <i class="fas fa-camera-retro"></i>--}}
                            <div class="icon"><i class="fas fa-camera-retro" aria-hidden="true"></i></div>
                            <input type="file" name="image" placeholder="Upload Your Image"
                                onfocus="this.placeholder = ''" value="{{ old('image') }}" onblur="this.placeholder = 'Upload Your Image'"
                                class="single-input">
                        </div>
                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input type="hidden" name="job_id" value="{{$job->id}}">


{{--                        <div class="input-group-icon mt-10">--}}
{{--                            <div class="icon"><i class="fas fa-briefcase mt-2" aria-hidden="true"></i></div>--}}
{{--                            <div class="form-select" id="default-select">--}}
{{--                               <select name=" select">--}}
{{--                                @foreach ($jobs as $job )--}}
{{--                                <option value=" {{ $job->id }}">{{ $job->job_title }}</option>--}}
{{--                                @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="apply-btn2 mt-3 text-center">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
