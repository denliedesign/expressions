@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    {{--    <div class="banner-show-wrap">--}}
    {{--        <div class="banner-show"></div>--}}
    {{--    </div>--}}
    <div class="my-5">
        <div class="container my-md-5 py-md-5">
            <h2 class="text-center text-uppercase">&mdash; Spring 2026 &mdash;</h2>
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
                <div class="btn btn-danger btn-lg shadow">
                    <a class="text-white text-decoration-none" href="https://portal.akadadance.com/auth?schoolId=177" target="_blank">Enroll Now</a>
                </div>
                <div class="btn btn-secondary ms-4 btn-lg shadow">
                    <a class="text-white text-decoration-none" href="/images/25-dress-code.pdf" target="_blank">Dress Code</a>
                </div>
{{--                <div class="ms-4 d-flex align-items-center">--}}
{{--                    <a href="#musical-theater">Matilda</a>--}}
{{--                </div>--}}
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
                <img src="/images/spring-2026-class-guide-1.jpg" alt="spring class guide" class="img-fluid">
                <img src="/images/spring-2026-class-guide-2.jpg" alt="spring class guide" class="img-fluid">
{{--                <img src="/images/cast-list-25.jpg" alt="fall class guide" class="img-fluid">--}}
{{--                <a href="/images/23-fall.pdf" target="_blank">--}}
{{--                    <img src="/images/23-fall-1.jpg" alt="fall flyer" class="img-fluid rounded">--}}
{{--                </a>--}}
{{--                <a href="/images/23-fall.pdf" target="_blank">--}}
{{--                    <img src="/images/23-fall-2.jpg" alt="fall flyer" class="img-fluid rounded">--}}
{{--                </a>--}}
{{--                <a href="/images/23-fall.pdf" target="_blank">--}}
{{--                    <img src="/images/23-fall-3.jpg" alt="fall flyer" class="img-fluid rounded">--}}
{{--                </a>--}}
            </div>
            <div id="musical-theater">
{{--                <div class="my-5 row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">--}}
{{--                    <div class="col d-flex align-items-center"><img src="/images/matilda-jr.png" class="img-fluid" alt=""></div>--}}
{{--                    <div class="col d-flex align-items-center">--}}
{{--                        <div>--}}
{{--                            <h2 class="text-center text-uppercase mt-2">&mdash; Matilda Jr. &mdash;</h2>--}}
{{--                            <p>--}}
{{--                                We are excited to announce that our Fall Musical will be Matilda the Musical Jr., with a performance on November 15 at St. Henry High School! We cannot wait to see our students bring this incredible story to life on stage! 🌟--}}
{{--                                <br><br>Auditions will be held on August 4 at Expressions. If your performer plans to audition for Matilda Jr. please choose one of our time slots here:--}}
{{--                                <a href="https://appt.link/matilda-auditions-tuZ3ArrA/EDTMatilda">https://appt.link/matilda-auditions-tuZ3ArrA/EDTMatilda</a>--}}
{{--                                <br><br>We will be offering an Audition Workshop on August 2 from 9:30 AM to 11:30 AM for $50. This is a valuable opportunity for performers to present their audition material in front of others and receive feedback before audition day on August 4. If you are registered for the full week of camp mentioned below, the audition workshop is free of charge.--}}
{{--                                <br><br>Want to really feel prepared for the stage?--}}
{{--                                <br><br>We highly recommend registering for our week-long Behind the Curtain summer camp (July 28-August 1). This is a great opportunity for your performer to brush up on their skills in vocals, acting, and dance before auditions with incredible local professionals - including the amazing Catherine Keen of--}}
{{--                                <a href="https://www.facebook.com/KeenVoiceStudio?__cft__[0]=AZXRn6bz4msHz8SdFT1vV6UUb7iD6EaxTNmkxaTWYI94jhZIil_u2YCjtAgWddwHlo1HQBKqBRoO0LLVqm9X-Gy3ZsMvY-AbcAo6M31FJFlo3b8F3p_Qduq9kvE_ggBNQUZGHODlLV6U5iVm-HdaMqqJmuKjOO_EhsMysdXw3URGGOMfqaoQADBnI1gaypaPOwPi-1g0XhWy2rY5wA2phux2&__tn__=-]K-R">Keen Voice Studio</a>! Camp tuition will not be charged until the week before it begins, but it is important to secure your spot today as space is limited.--}}
{{--                                <br><br>--}}
{{--                                We look forward to seeing many of you at Behind the Curtain, at auditions, and on stage in November!--}}
{{--                                <br><br>--}}
{{--                                Cost: $579 (includes membership fee, 15 weeks of classes, costumes, rehearsals, two show tickets/two programs)--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


            </div>
        </div>
    </div>

    @include('footer')
@endsection
