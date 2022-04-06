@extends('layouts.app')

@section('content')

    @include('social-nav')
    @include('navbar')

    <!------------------------MODAL------------------------->

{{--    <div class="d-flex justify-content-center">--}}
{{--        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 75%;">--}}
{{--            <img src="/images/Rudolph.png" alt="rudolph" style="width: 100%; height: auto;">--}}
{{--            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--            <p class="text-center pt-3" style="font-size: 2em;">Tickets $20/ea plus tax<br>For Advance Purchase Call <strong>859-344-8489</strong><br>Otherwise, Tickets Will Be Available At The Door</p>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!------------------------END MODAL------------------------->

    <div class="mb-5 pb-5">
        <div>
            <div class="d-flex justify-content-center">
{{--                <img src="/images/spring-banner.png" alt="spring mini sessions" style="width: 100%;">--}}
                <img src="/images/summer-banner-1.png" alt="enroll summer" style="width: 100%;">
            </div>
            <div class="d-flex justify-content-center">
{{--                <div style="width: max-content;" class="mx-5 p-4 shadow rounded text-center">--}}
                    <div class="mt-3">
{{--                        <p>Ready to Leap In?</p>--}}
                        <div class="btn btn-primary btn-lg">
                            <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll Today!</a>
                        </div>
                    </div>
{{--                </div>--}}
            </div>
        </div>
{{--        <video controls poster="/images/edt-fun.png" style="width: 100%;" class="rounded shadow">--}}
{{--            <source src="" type="video/mp4">--}}
{{--        </video>--}}
{{--        <div class="row d-flex justify-content-center align-items-center">--}}
{{--            <div class="col-sm">--}}
{{--                <img src="/images/gift-of-dance.png" alt="gift of dance" class="img-fluid">--}}
{{--            </div>--}}
{{--            <div class="col-sm">--}}
{{--                <img src="/images/bouncin-babes.png" alt="bouncin babes" class="img-fluid">--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    <div class="pb-5 mb-md-5">
        <div class="container pb-md-5 mb-md-5">
            <h2 class="text-center">We Have Built a Reputation for Excellence in Dance Instruction</h2>
            <p class="text-center big-font">
                From your child’s first class to their graduation performance, EDT has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, EDT is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.
            </p>
        </div>
    </div>

    <div style="width: 100%; background: #2A42C8; position: relative;" class="my-0 py-0">
        @include('waves-top')
        <div class="row my-0 py-0 text-white">
            <div class="col-sm d-none d-md-block" style="position: relative; height: 100vh;">
                <img src="/images/expressions-flamingos.jpg" alt="flamingo dancers" class="img-fluid rounded shadow" style="height: 400px; width: auto; position: absolute; top: 2%; left: 8%;">
                <img src="/images/expressions-registration.jpg" alt="dancers on stage" class="img-fluid rounded shadow" style="height: 400px; width: auto; position: absolute; top: 44%; left: 20%;">
            </div>
            <div class="col-sm d-md-none">
                <img src="/images/expressions-flamingos.jpg" alt="flamingo dancers" class="img-fluid rounded shadow" style="height: 400px; width: auto;">
                <img src="/images/expressions-registration.jpg" alt="dancers on stage" class="img-fluid rounded shadow" style="height: 400px; width: auto;">
            </div>
            <div class="col-sm">
                <img src="/images/safer-studio-logo.png" alt="safer studio logo" class="img-fluid">
                <h2 class="text-center">EDT is a Safer Studio™</h2>
                <p class="text-center big-font">
                    EDT focuses on a hierarchy of measures to create a Safer Studio™ environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleaning and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.
                </p>
            </div>
        </div>
        @include('waves-bottom')
    </div>

    <section id="ask-us-anything" class="mt-md-5 pt-md-5">
        <div class="my-5 pt-md-5">
            <div class="row">
                <div class="col-2 p-0 m-0" style="position: relative;">
{{--                    <div id="costumes"></div>--}}
{{--                    <div id="blue-costumes"></div>--}}
                </div>
                <div class="col-sm shadow rounded py-3 px-4 mt-2">
                    <h2 class="text-center">Ask Us Anything...</h2>
                    @include('contact.create')
                </div>
                <div class="col-sm p-0 m-0" style="position: relative;">
                    <div id="gloves"></div>
                    <div id="blue-gloves"></div>
                </div>
            </div>
        </div>
    </section>

<div style="width: 100%"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=2434%20High%20Street,%20Crescent%20Springs,%20KY%2041017+(Expressions%20Dance%20Theatre)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>

@include('footer')

@endsection
