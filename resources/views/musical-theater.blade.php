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
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                <div class="my-5">
                    <h4 class="text-uppercase">KIDS (Ages 5-8)</h4>
                    <p class="big-font">
                        Our Kids class introduces our youngest theater students to the world of theater focusing on fun, imagination, and structured learning with an emphasis on ensemble performing. Fall and Spring Mini Sessions are available this season with a parent observation on the last day of class.                </p>
                </div>
                <div class="my-5">
                    <h4 class="text-uppercase">JUNIORS (Ages 8 and up)</h4>
                    <p class="big-font">
                        Our “Juniors” program offers the older theater student more intense work in staging, audition preparation, costuming, and make-up, while strengthening and enhancing each student’s skills in acting, vocal, and movement.  Performance opportunities include stage performances and seasonal performances with Expressions’ dancers.
                    </p>
                </div>
            </div>
{{--            <div>--}}
{{--                <p class="big-font text-center">--}}
{{--                    This Spring we'll bring a vibrant underwater world to life in <strong>Finding Nemo JR.</strong>! This beloved story is full of family, friendship, and adventure, and will be sure to entertain an audience of all ages!--}}
{{--                </p>--}}
{{--                <div class="d-flex justify-content-center">--}}
{{--                    <img src="/images/mt-nemo.png" alt="nemo flyer" class="img-fluid">--}}
{{--                </div>--}}
{{--                <p class="big-font text-center mt-3">--}}
{{--                    Class is held on Mondays from 6:15-7:45PM beginning January 8th. The session concludes with a stage production in May (date/time TBD).--}}
{{--                    <br><br>--}}
{{--                    Auditions - Monday, January 8th from 6:15-7:45PM--}}
{{--                </p>--}}
{{--                <div class="d-flex justify-content-center my-3">--}}
{{--                    <div class="btn btn-primary btn-lg">--}}
{{--                        <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll!</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </div>

    @include('footer')
@endsection
