@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    {{--    <div class="banner-show-wrap">--}}
    {{--        <div class="banner-show"></div>--}}
    {{--    </div>--}}
    <div class="my-5 py-md-5">
        <div class="container my-md-5 py-md-5">
            <h2 class="text-center text-uppercase">&mdash; Spring &mdash;</h2>
{{--            <div class="d-flex justify-content-center">--}}
{{--                <img src="/images/fall-2022-heading.png" alt="spring heading" class="img-fluid rounded">--}}
{{--            </div>--}}
            <p class="text-center">Registration is Open!</p>
            <div class="d-flex justify-content-center my-4">
                <div class="btn btn-primary btn-lg shadow">
                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll Today!</a>
                </div>
            </div>
{{--            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">--}}
{{--                <a href="/images/fall-2022.pdf" target="_blank">--}}
{{--                    <img src="/images/fall-2022-a.png" alt="spring flyer" class="img-fluid rounded">--}}
{{--                </a>--}}
{{--                <a href="/images/fall-2022.pdf" target="_blank">--}}
{{--                    <img src="/images/fall-2022-b.png" alt="spring flyer" class="img-fluid rounded">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="d-flex justify-content-center my-4">--}}
{{--                <div class="btn btn-primary btn-lg shadow">--}}
{{--                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll Today!</a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

    @include('footer')
@endsection
