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

            <div class="d-flex justify-content-center mt-4">
                <div>
                    <p>
                        Frozen Jr. Musical Theater Class and Winter Performance
                        <br>Ages: 8 and up
                        <br>Class Meets: Thursdays 6:30-8:00PM beginning September 12
                        <br>Tech Weeks: December 2-5 and December 9-12
                        <br>Stage Rehearsal & Performances: December 12-14
                        <br>
                        <br>Auditions for main and secondary roles: Thursday, September 5th -- 6:30-8:00PM
                        <br>* If your child prefers to be a part of the ensemble and chorus they do not need to attend auditions
                        <br>* Links to audition materials will be sent once child is registered.
                    </p>
{{--                    <img src="/images/mt-camp-2.jpg" alt="mt camps" class="img-fluid">--}}
                    <div class="d-flex justify-content-center my-4">
                        <div class="btn btn-primary btn-lg">
                            <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Register</a>
                        </div>
                    </div>
                </div>
            </div>

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
