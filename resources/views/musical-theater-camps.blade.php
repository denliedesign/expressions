@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    <div class="py-5">
        <div class="container my-md-5 py-md-5">
            <h1 class="text-center text-uppercase">&mdash; Musical Theater &mdash;</h1>
{{--            <h1 class="text-center text-uppercase">&mdash; Mini Sessions &mdash;</h1>--}}

{{--            <div class="d-flex justify-content-center">--}}
{{--                <div>--}}
{{--                    <img src="/images/mt-camp-1.jpg" alt="mt camps" class="img-fluid">--}}
{{--                    <div class="d-flex justify-content-center my-4">--}}
{{--                        <div class="btn btn-primary btn-lg">--}}
{{--                            <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll!</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

<div class="row">
    <div class="col-md my-3">
        <img src="/images/matilda.png" class="img-fluid" alt="">
    </div>
    <div class="col-md my-3">
        <p>
            We are excited to announce that our Fall Musical will be Matilda the Musical Jr., with a performance on November 15 at St. Henry High School! We cannot wait to see our students bring this incredible story to life on stage! 🌟
            <br><br>Auditions will be held on August 4 at Expressions. If your performer plans to audition for Matilda Jr. please choose one of our time slots here:
            <a href="https://appt.link/matilda-auditions-tuZ3ArrA/EDTMatilda">https://appt.link/matilda-auditions-tuZ3ArrA/EDTMatilda</a>
            <br><br>We will be offering an Audition Workshop on August 2 from 9:30 AM to 11:30 AM for $50. This is a valuable opportunity for performers to present their audition material in front of others and receive feedback before audition day on August 4. If you are registered for the full week of camp mentioned below, the audition workshop is free of charge.
            <br><br>Want to really feel prepared for the stage?
            <br><br>We highly recommend registering for our week-long Behind the Curtain summer camp (July 28-August 1). This is a great opportunity for your performer to brush up on their skills in vocals, acting, and dance before auditions with incredible local professionals - including the amazing Catherine Keen of
            <a href="https://www.facebook.com/KeenVoiceStudio?__cft__[0]=AZXRn6bz4msHz8SdFT1vV6UUb7iD6EaxTNmkxaTWYI94jhZIil_u2YCjtAgWddwHlo1HQBKqBRoO0LLVqm9X-Gy3ZsMvY-AbcAo6M31FJFlo3b8F3p_Qduq9kvE_ggBNQUZGHODlLV6U5iVm-HdaMqqJmuKjOO_EhsMysdXw3URGGOMfqaoQADBnI1gaypaPOwPi-1g0XhWy2rY5wA2phux2&__tn__=-]K-R">Keen Voice Studio</a>! Camp tuition will not be charged until the week before it begins, but it is important to secure your spot today as space is limited.
            <br><br>
            We look forward to seeing many of you at Behind the Curtain, at auditions, and on stage in November!
        </p>
    </div>
</div>

{{--            <div class="row mt-4">--}}
{{--                <div class="col-md my-3 d-flex justify-content-center">--}}
{{--                    <img src="/images/snoozy-snowflake.png" alt="frozen picture" class="img-fluid rounded shadow">--}}
{{--                </div>--}}
{{--                <div class="col-md my-3 d-flex align-items-center justify-content-center">--}}
{{--                    <div>--}}
{{--                        <p>--}}
{{--                            Snoozy Snowflake Musical Theater Mini Session--}}
{{--                            <br>Ages: 5-8--}}
{{--                            <br>In this mini musical, Snoozy Snowflake is reluctant to fall in line with the tasks of the other snowflakes, which holds up the first snowfall of winter! With an easy-to-memorize rhyming script and songs, this show will be the perfect introduction to musical theater for young actors.--}}
{{--                            <br>This 8-week session includes a performance at St. Henry High School the weekend of December 13-14.--}}
{{--                            <br>Cost: $249 (includes costume & production fee)--}}
{{--                        </p>--}}
{{--                        --}}{{--                    <img src="/images/mt-camp-2.jpg" alt="mt camps" class="img-fluid">--}}
{{--                        <div class="my-4">--}}
{{--                            <div class="btn btn-primary btn-lg">--}}
{{--                                <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Register</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <x-camp image="swiftie.png" title="The Shimmer & Shine Swiftie Session" info="This one's just for the lil' Swifties out there ages 4-7!--}}
{{--            <br>--}}
{{--Dancers are welcome to come to class dressed in their Swiftie best. We will move and groove to some of their favorite hits from Tay Tay!--}}
{{--<br>--}}
{{--Come join us! Enroll TODAY in our 4-week Mini Session for kids ages 4-7. No dance experience is necessary! A $25 deposit is required to hold your spot upon registering. The balance will be due on April 1st."/>--}}

{{--            <x-camp image="tutus-ties.png" title="Tutus and Ties" info="Tutus and Ties is the perfect transition from our 'mommy and me' style class to an independent class without the help of a caregiver. If your tot is at least two years old and does not have trouble separating from you, then they are ready for this next step at Expressions!--}}
{{--<br><br>--}}
{{--            April 10 - May 15--}}
{{--            <br>Ages 2-3--}}
{{--            <br>Tuition: $149--}}
{{--            <br>Attire: Dancewear and ballet shoes are encouraged, but not required to essential to enjoy the class. Please dress your child in play clothes and sneakers as an alternative." />--}}

{{--            <x-camp image="broadway-babies-4-12-24.png" title="Broadway Babies Mini Session" info="Broadway Babies is a beginning dance class for little ones and a caregiver! Get ready to move and groove in this fun, energetic class!--}}
{{--                <br>--}}
{{--                <br>April 11 - May 16--}}
{{--                <br>Thursdays 5:15-6:00PM--}}
{{--                <br>Ages 1-2--}}
{{--                <br>Tuition: $149--}}
{{--                <br>Attire: Dancers can wear a leotard and tights or comfortable attire. Ballet shoes, bare feet, socks, or sneakers are also approved.--}}
{{--                <br><br>Parents may observe the last week of class!" />--}}

        </div>
    </div>

    @include('footer')
@endsection
