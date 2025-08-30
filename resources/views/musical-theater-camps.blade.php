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
        <img src="/images/matilda-jr-flyer.png" class="img-fluid" alt="">
    </div>
    <div class="col-md my-3">
        <p>
            Congratulations to the cast of Matilda the Musical, JR.! We can't wait to see our students bring this incredible story to life on stage! Tickets will go on sale in October at
            <a href="https://2968.recitalticketing.com" target="_blank">https://2968.recitalticketing.com</a>
        </p>
    </div>
</div>

            <div class="my-5 row">
                <div class="col-md d-flex align-items-center">
                    <div>
                        <h2 class="text-center text-uppercase">&mdash; Matilda Ensemble Class &mdash;</h2>
                        <p>
                            Join the cast of Matilda the Musical in this special ensemble class designed just for young performers ages 5-8! Each week, dancers will build confidence, stage presence, and teamwork as they learn one or two featured routines that will be performed in the full production. This is a wonderful opportunity for younger students to experience being part of a musical theatre show in a fun and age-appropriate setting. The session includes 8 weekly classes, performance participation, and costume fee—all bundled into one simple price. Perfect for young stars ready to shine on stage!
                            <br><br>
                            Cost: $349 (includes membership fee, 9 weeks of classes/rehearsals, costumes, two show tickets/two programs)
                        </p>
                    </div>
                </div>
                <div class="col d-flex align-items-center"><img src="/images/ensemble-new.png" class="img-fluid" alt=""></div>
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
