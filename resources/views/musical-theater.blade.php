@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    {{--    <div class="banner-show-wrap">--}}
    {{--        <div class="banner-show"></div>--}}
    {{--    </div>--}}
    <div class="my-5 py-md-5">
        <div class="container my-md-5 py-md-5">
            <h2 class="text-center text-uppercase">&mdash; Musical Theater &mdash;</h2>
            <p class="text-center">
                Our Expressions Children's Theater program is for young kids and teens with an interest in musical theater and acting.
            </p>
            <div class="my-5">
                <h4 class="text-uppercase">MINI STARS (Ages 4-7)</h4>
                <p class="big-font">
                    Our “Minis” class will introduce our youngest theater students to the world of theater, focusing on fun, imagination, and structured learning with an emphasis on ensemble performing.  Performance opportunities vary between in-studio performances and stage performances with our older theater students.
                </p>
            </div>
            <div class="my-5">
                <h4 class="text-uppercase">KIDS (Ages 8-11)</h4>
                <p class="big-font">
                    Our “Kids” class focuses on theater education with kids developing both individual and ensemble skills in acting, vocal, and basic dance movement.  It will incorporate a higher level of responsibility, perfect for the young performer.  Performance opportunities vary between in-studio performances and stage performances, often collaborating with Expressions on seasonal performances.
                </p>
            </div>
            <div class="my-5">
                <h4 class="text-uppercase">JUNIORS (Ages 12-18)</h4>
                <p class="big-font">
                    Our “Juniors” program offers the older theater student more intense work in staging, audition preparation, costuming, and make-up, while strengthening and enhancing each student’s skills in acting, vocal, and movement.  Performance opportunities include stage performances and seasonal performances with Expressions’ dancers.
                </p>
            </div>

        </div>
    </div>

    @include('footer')
@endsection
