@extends('public-layouts.layouts')

@section('content')

@section('title')
    Login
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
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right font-weight-bold">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" class="single-input font-weight-bold" placeholder="Full Name" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Please Enter Your Email'" type="email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right font-weight-bold">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" class="single-input font-weight-bold"  placeholder="Please Enter Your Password" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Please Enter Your Password'"  type="password" class="form-control" @error('password') is-invalid @enderror name="password" required autocomplete="current-password">

                                @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-5">
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('Login') }}
                                </button>

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
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

{{--<!-- JS here -->--}}

{{--<!-- All JS Custom Plugins Link Here here -->--}}
{{--<script src="{{asset('public-theme/./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>--}}
{{--<!-- Jquery, Popper, Bootstrap -->--}}
{{--<script src="{{asset('public-theme/./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>--}}
{{--<script src="{{asset('public-theme/./assets/js/popper.min.js')}}"></script>--}}
{{--<script src="{{asset('public-theme/./assets/js/bootstrap.min.js')}}"></script>--}}
{{--<!-- Jquery Mobile Menu -->--}}
{{--<script src="{{asset('public-theme/./assets/js/jquery.slicknav.min.js')}}"></script>--}}

{{--<!-- Jquery Slick , Owl-Carousel Plugins -->--}}
{{--<script src="{{asset('public-theme/./assets/js/owl.carousel.min.js')}}"></script>--}}
{{--<script src="{{asset('public-theme/./assets/js/slick.min.js')}}"></script>--}}
{{--<script src="{{asset('public-theme/./assets/js/price_rangs.js')}}"></script>--}}

{{--<!-- One Page, Animated-HeadLin -->--}}
{{--<script src="{{asset('public-theme/./assets/js/wow.min.js')}}"></script>--}}
{{--<script src="{{asset('public-theme/./assets/js/animated.headline.js')}}"></script>--}}
{{--<script src="{{asset('public-theme/./assets/js/jquery.magnific-popup.js')}}"></script>--}}

{{--<!-- Scrollup, nice-select, sticky -->--}}
{{--<script src="{{asset('public-theme/./assets/js/jquery.scrollUp.min.js')}}"></script>--}}
{{--<script src="{{asset('public-theme/./assets/js/jquery.nice-select.min.js')}}"></script>--}}
{{--<script src="{{asset('public-theme/./assets/js/jquery.sticky.js')}}"></script>--}}

{{--<!-- contact js -->--}}
{{--<script src="{{asset('public-theme/./assets/js/contact.js')}}"></script>--}}
{{--<script src="{{asset('public-theme/./assets/js/jquery.form.js')}}"></script>--}}
{{--<script src="{{asset('public-theme/./assets/js/jquery.validate.min.js')}}"></script>--}}
{{--<script src="{{asset('public-theme/./assets/js/mail-script.js')}}"></script>--}}
{{--<script src="{{asset('public-theme/./assets/js/jquery.ajaxchimp.min.js')}}"></script>--}}

{{--<!-- Jquery Plugins, main Jquery -->--}}
{{--<script src="{{asset('public-theme/./assets/js/plugins.js')}}"></script>--}}
{{--<script src="{{asset('public-theme/./assets/js/main.js')}}"></script>--}}

{{--</body>--}}

{{--</html>--}}

