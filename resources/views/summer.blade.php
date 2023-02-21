@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    {{--    <div class="banner-show-wrap">--}}
    {{--        <div class="banner-show"></div>--}}
    {{--    </div>--}}
    <div class="my-5 py-md-5">
        <div class="container my-md-5 py-md-5">
{{--            <h2 class="text-center text-uppercase">&mdash; Summer &mdash;</h2>--}}
            <h2 class="text-center text-uppercase">&mdash; Passport to Summer Magic Mini Sessions &mdash;</h2>
{{--            <div class="d-flex justify-content-center my-4">--}}
{{--                <div class="btn btn-primary btn-lg">--}}
{{--                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll Today!</a>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="d-flex justify-content-center">
                <img src="/images/passport-to-summer-magic.png" alt="passport to summer magic" class="img-fluid shadow rounded">
            </div>
            <p class="mt-3">
                Join us this summer as we grab our passports and head on a magical adventure! Each week, participants will dance, explore, and use their imaginations as we travel to some of our favorite Orlando destinations!!
                <br><br>
                Each themed week will include:
                <br>• A morning stretch followed by a Karma Kids Star Leadership Lesson
                <br>• Creative Movement Class
                <br>• Themed craft, story, and/or imagination station
                <br>• Time outside (if weather permits)
                <br><br>
                Monday - Thursday
                <br>9:00AM-12:00PM
                <br>Ages 4-7
                <br>Tuition: $180 per week
            </p>
{{--            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">--}}
{{--                <a href="/images/summer-2022.pdf" target="_blank">--}}
{{--                    <img src="/images/summer-p1.png" alt="summer flyer" class="img-fluid">--}}
{{--                </a>--}}
{{--                <a href="/images/summer-2022.pdf" target="_blank">--}}
{{--                    <img src="/images/summer-p2.png" alt="summer flyer" class="img-fluid">--}}
{{--                </a>--}}
{{--            </div>--}}
            <div class="d-flex justify-content-center my-4">
                <div class="btn btn-primary btn-lg">
                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll Today!</a>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
@endsection
