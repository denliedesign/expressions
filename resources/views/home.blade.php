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

    <div class="mb-5">
        <div>
            <div style="position: relative; width: 100%;">
{{--                <img src="/images/spring-banner.png" alt="spring mini sessions" style="width: 100%;">--}}
{{--                <img src="/images/summer-2023.png" alt="enroll summer" style="width: 100%;">--}}
                <img src="/images/header-july-23-crop.jpg" alt="little dancers in costume in a row" style="width: 100%;">
                <div style="background: linear-gradient(to bottom, transparent, rgba(0,0,0,.20)); height: 100%; width: 100%; position: absolute; top: 0; left: 0; z-index: 2;"></div>
                <div class="d-none d-sm-none d-md-block d-lg-block" style="position: absolute; bottom: 5%; left: 50%; transform: translate(-50%, -50%); width: 100%; z-index: 3;">
                    <h1 class="text-center text-white text-uppercase fw-bold" style="text-shadow: 2px 2px 4px black; font-size: 4em;">This is where you <span style="color: #E10100;">start</span>...<br>This is where you <span style="color: #E10100;">grow</span>!</h1>
                </div>
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

    <div class="container">
        <div class="d-block d-sm-block d-md-none d-lg-none">
            <h1 class="text-center text-white text-uppercase fw-bold" style="text-shadow: 2px 2px 4px black; font-size: 4em;">This is where you <span style="color: #E10100;">start</span>...<br>This is where you <span style="color: #E10100;">grow</span>!</h1>
        </div>
    </div>
    <div class="pb-5 mb-md-5">
        <div class="container pb-md-5 mb-md-5">
            <h2 class="text-center">We Have Built a Reputation for Excellence in Dance Instruction</h2>
            <p class="text-center big-font">
                From your child’s first class to their graduation performance, EDT has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, EDT is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.
            </p>
            <div class="d-flex justify-content-center">
                <div class="btn btn-primary btn-lg">
                    <a class="text-white text-decoration-none" href="/spring">Find Your Class</a>
                </div>
            </div>
        </div>
    </div>

    <div style="width: 100%; background: #2A42C8; position: relative;" class="my-0 py-0">
        @include('waves-top')
        <div class="container text-white py-5">
            <h2 class="text-center mb-5">Why Choose Us?</h2>
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/badge-celebrate-25.png" alt="certifications" style="height: 125px; width: auto; filter: invert(100%);">
                    </div>
                        <p class="big-font text-center">Celebrating 25 Years in Business</p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/icon-cpr.png" alt="certifications" style="height: 125px; width: auto;">
                    </div>
                        <p class="big-font text-center">First Aid & CPR Certified Teachers & Staff</p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/icon-bg-check.png" alt="certifications" style="height: 125px; width: auto;">
                    </div>
                        <p class="big-font text-center">Background Checked Teachers & Staff</p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/logo-MTJGD-charter.png" alt="certifications" style="height: 125px; width: auto;">
                    </div>
                        <p class="big-font text-center">Licensed Kentucky Charter Member of More Than Just Great Dancing</p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/ypad-badge.png" alt="certifications" style="height: 125px; width: auto;">
                    </div>
                        <p class="big-font text-center">Youth Protection Advocates in Dance Ambassador (YPAD)</p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/logo-dance-educators-of-america.png" alt="certifications" style="height: 125px; width: auto;">
                    </div>
                        <p class="big-font text-center">Member of Dance Educators of America</p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/logo-Acro-Arts.png" alt="certifications" style="height: 125px; width: auto;">
                    </div>
                        <p class="big-font text-center">Acrobatic Arts Certified Teachers</p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/icon-rhythm-works.png" alt="certifications" style="height: 125px; width: auto;">
                    </div>
                        <p class="big-font text-center">Certified Rhythm Works Integrative Dance Instructors</p>
                </div>
            </div>
        </div>
{{--        <div class="row my-0 py-0 text-white">--}}
{{--            <div class="col-sm d-none d-md-block" style="position: relative; height: 100vh;">--}}
{{--                <img src="/images/expressions-flamingos.jpg" alt="flamingo dancers" class="img-fluid rounded shadow" style="height: 400px; width: auto; position: absolute; top: 2%; left: 8%;">--}}
{{--                <img src="/images/expressions-registration.jpg" alt="dancers on stage" class="img-fluid rounded shadow" style="height: 400px; width: auto; position: absolute; top: 44%; left: 20%;">--}}
{{--            </div>--}}
{{--            <div class="col-sm d-md-none">--}}
{{--                <img src="/images/expressions-flamingos.jpg" alt="flamingo dancers" class="img-fluid rounded shadow" style="height: 400px; width: auto;">--}}
{{--                <img src="/images/expressions-registration.jpg" alt="dancers on stage" class="img-fluid rounded shadow" style="height: 400px; width: auto;">--}}
{{--            </div>--}}
{{--            <div class="col-sm">--}}
{{--                <img src="/images/safer-studio-logo.png" alt="safer studio logo" class="img-fluid">--}}
{{--                <h2 class="text-center">EDT is a Safer Studio™</h2>--}}
{{--                <p class="text-center big-font">--}}
{{--                    EDT focuses on a hierarchy of measures to create a Safer Studio™ environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleaning and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
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

    <div class="" style="height: 100%; background: #C6EE56;">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/we-moved.png" alt="new facility" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="d-flex align-items-center justify-content-center" style="height: 100%;">
                        <h2 style="font-size: 2.5em;">
                            We have moved to a new home!
                            <br>We can't wait to share it with you when our classes begin on Monday, January 8th!
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--<div style="width: 100%"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=2434%20High%20Street,%20Crescent%20Springs,%20KY%2041017+(Expressions%20Dance%20Theatre)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>--}}
<div style="width: 100%"><div style="width: 100%"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=350&amp;hl=en&amp;q=2641%20Crescent%20Springs%20Pike,%20Erlanger,%20KY%2041017+(Expressions%20Dance%20Theatre)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div></div>


@include('footer')

@endsection
