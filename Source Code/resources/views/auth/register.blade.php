@extends('public-layouts.layouts')

@section('content')


@section('title')
    Register
@endsection

<div class="container">
    <div class="whole-wrap">
        <div class="container">

            <div class="section-top-border">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-8 p-3">
                        {{--                    <h1 class="mb-30 text-center font-weight-bold font-italic">Login Form</h1>--}}
                        {{--                    <img src="{{asset('public-theme/assets/img/logo/logo.png')}}">--}}
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header" style="background-color: #C3F0F6;" ><img class="text-center" src="{{asset('public-theme/assets/img/logo/logo.png')}}"></div>

                                    <div class="card-body col-12">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right font-weight-bold">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="single-input font-weight-bold" placeholder="Please Enter Your Name" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Please Enter Your Name'" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right font-weight-bold">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" type="text" class="single-input font-weight-bold" placeholder="Please Enter Your Email" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Please Enter Your Email'" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right font-weight-bold">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" type="text" class="single-input font-weight-bold" placeholder="Please Enter Your Password" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Please Enter Your Password'" name="password" required autocomplete="new-password">

                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right font-weight-bold">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" type="text" class="single-input font-weight-bold" placeholder="Confirm Your Password" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Confirm Your Password'" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

