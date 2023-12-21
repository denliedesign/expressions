@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    {{--    <div class="banner-show-wrap">--}}
    {{--        <div class="banner-show"></div>--}}
    {{--    </div>--}}
    <div class="my-5">
        <div class="container my-md-5 py-md-5">
            <h2 class="text-center text-uppercase">&mdash; Spring 2024 &mdash;</h2>
{{--            <img src="/images/season-25.png" alt="season 25 logo" class="img-fluid">--}}
{{--                        <div class="d-flex justify-content-center my-4">--}}
{{--                            <div class="btn btn-primary btn-lg shadow">--}}
{{--                                <a class="text-white text-decoration-none" target="_blank">Register here on Sat. June 24</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}



{{--            <div class="d-flex justify-content-center">--}}
{{--                <img src="/images/fall-2022-heading.png" alt="fall heading" class="img-fluid rounded">--}}
{{--            </div>--}}
            <div class="d-flex justify-content-center my-4">
                <div class="btn btn-primary btn-lg shadow">
                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll Today!</a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
                <a href="/images/23-fall.pdf" target="_blank">
                    <img src="/images/23-fall-1.jpg" alt="fall flyer" class="img-fluid rounded">
                </a>
                <a href="/images/23-fall.pdf" target="_blank">
                    <img src="/images/23-fall-2.jpg" alt="fall flyer" class="img-fluid rounded">
                </a>
                <a href="/images/23-fall.pdf" target="_blank">
                    <img src="/images/23-fall-3.jpg" alt="fall flyer" class="img-fluid rounded">
                </a>
            </div>
            <div class="d-flex justify-content-center my-4">
                <div class="btn btn-primary btn-lg shadow">
                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll Today!</a>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
@endsection
