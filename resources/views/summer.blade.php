@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    <div class="my-5 py-md-5">
        <div class="container my-md-5 py-md-5">
            <h2 class="text-center text-uppercase">&mdash; Summer &mdash;</h2>
            <div class="d-flex justify-content-center my-4">
{{--                <div class="btn btn-primary btn-lg me-4">--}}
{{--                    <a class="text-white text-decoration-none" href="/images/summer-24.pdf" target="_blank">View PDF</a>--}}
{{--                </div>--}}
{{--                <div class="btn btn-danger btn-lg">--}}
{{--                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Register Now!</a>--}}
{{--                </div>--}}
            </div>
            <div>
                <p class="text-center">Stay tuned for the release of our Summer Session Schedule!</p>
{{--                <img src="/images/summer-24-1.jpg" alt="summer flyer" class="img-fluid">--}}
{{--                <div class="row row-cols-2">--}}
{{--                    <img src="/images/all-stars-clinic.png" alt="all stars clinic" class="img-fluid">--}}
{{--                    <img src="/images/swiftie-camp.png" alt="swiftie camp" class="img-fluid">--}}
{{--                </div>--}}
{{--                <img src="/images/summer-24-2.jpg" alt="summer flyer" class="img-fluid">--}}
            </div>
            <div class="d-flex justify-content-center my-4">
                <img src="/images/summer-2025.png" class="img-fluid" alt="">
{{--                <div class="btn btn-primary btn-lg me-4">--}}
{{--                    <a class="text-white text-decoration-none" href="/images/summer-24.pdf" target="_blank">View PDF</a>--}}
{{--                </div>--}}
{{--                <div class="btn btn-danger btn-lg">--}}
{{--                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Register Now!</a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    @include('footer')
@endsection
