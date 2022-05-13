@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    {{--    <div class="banner-show-wrap">--}}
    {{--        <div class="banner-show"></div>--}}
    {{--    </div>--}}
    <div class="my-5 py-md-5">
        <div class="container my-md-5 py-md-5">
            <h2 class="text-center text-uppercase">&mdash; Summer &mdash;</h2>
            <div class="d-flex justify-content-center my-4">
                <div class="btn btn-primary btn-lg">
                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll Today!</a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                <a href="/images/summer-2022.pdf" target="_blank">
                    <img src="/images/summer-2022-1.jpg" alt="summer flyer" class="img-fluid">
                </a>
                <a href="/images/summer-2022.pdf" target="_blank">
                    <img src="/images/summer-2022-2.jpg" alt="summer flyer" class="img-fluid">
                </a>
            </div>
            <div class="d-flex justify-content-center my-4">
                <div class="btn btn-primary btn-lg">
                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll Today!</a>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
@endsection
