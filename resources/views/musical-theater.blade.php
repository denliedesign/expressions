@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    {{--    <div class="banner-show-wrap">--}}
    {{--        <div class="banner-show"></div>--}}
    {{--    </div>--}}
    <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
        <div class="col mx-0 px-0"><img src="/images/mt-1.jpeg" alt="musical theater show" class="img-fluid"></div>
        <div class="col mx-0 px-0"><img src="/images/mt-2.jpg" alt="musical theater show" class="img-fluid"></div>
        <div class="col mx-0 px-0"><img src="/images/mt-3.jpg" alt="musical theater show" class="img-fluid"></div>
        <div class="col mx-0 px-0"><img src="/images/mt-4.jpeg" alt="musical theater show" class="img-fluid"></div>
        <div class="col mx-0 px-0"><img src="/images/mt-5.jpeg" alt="musical theater show" class="img-fluid"></div>
        <div class="col mx-0 px-0"><img src="/images/mt-6.jpg" alt="musical theater show" class="img-fluid"></div>
    </div>

    <div class="pb-md-5 my-5">
        <div class="container pb-md-5 mb-md-5">
            <h2 class="text-center text-uppercase">&mdash; Musical Theater &mdash;</h2>
            <p class="text-center">
                Our Expressions Children's Theater program is for young kids and teens with an interest in musical theater and acting.
            </p>
{{--            <div class="my-5">--}}
{{--                <h4 class="text-uppercase">MINI STARS (Ages 4-7)</h4>--}}
{{--                <p class="big-font">--}}
{{--                    Our “Minis” class will introduce our youngest theater students to the world of theater, focusing on fun, imagination, and structured learning with an emphasis on ensemble performing.  Performance opportunities vary between in-studio performances and stage performances with our older theater students.--}}
{{--                </p>--}}
{{--            </div>--}}
            <div class="my-5">
                <h4 class="text-uppercase">KIDS (Ages 5-8)</h4>
                <p class="big-font">
                    Our Kids class introduces our youngest theater students to the world of theater focusing on fun, imagination, and structured learning with an emphasis on ensemble performing. Fall and Spring Mini Sessions are available this season with a parent observation on the last day of class.                </p>
            </div>
            <div class="my-5">
                <h4 class="text-uppercase">JUNIORS (Ages 9 and up)</h4>
                <p class="big-font">
                    Our “Juniors” program offers the older theater student more intense work in staging, audition preparation, costuming, and make-up, while strengthening and enhancing each student’s skills in acting, vocal, and movement.  Performance opportunities include stage performances and seasonal performances with Expressions’ dancers.
                </p>
            </div>

        </div>
    </div>

    @include('footer')
@endsection
