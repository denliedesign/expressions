@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    <div class="py-5">
        <div class="container my-md-5 py-md-5">
            <h2 class="text-center text-uppercase">&mdash; Mini Sessions &mdash;</h2>

            <x-camp image="swift.png" title="The Shake It Off Swiftie Session" info="Dance like nobody's watching as we groove to Taylor's iconic tunes, learning a new dance each day! Shake it off, show off your moves, and become a fearless dancer... just like Taylor herself!
<br><br>
4-week Mini Session
<br>March 7 - 28
<br>Thursdays 6:45-7:30PM
<br>Ages 8-11
<br>Tuition: $99
<br><br>
No dance experience is necessary! Wear your Swiftie best. Each week we will groove to one of Taylor's songs like we are in our own music video! So fun!!
A $50 deposit is required to hold your spot upon registering. The balance will be due on March 1st." />

            <x-camp image="tutus-and-ties.png" title="Tutus and Ties" info="Tutus and Ties is the perfect transition from our 'mommy and me' style class to an independent class without the help of a caregiver. If your tot is at least two years old and does not have trouble separating from you, then they are ready for this next step at Expressions!
<br><br>
            February 28 - March 27
            <br>Ages 2-3
            <br>Tuition: $125
            <br>Attire: Dancewear and ballet shoes are encouraged, but not required to essential to enjoy the class. Please dress your child in play clothes and sneakers as an alternative." />

{{--            <x-camp image="" title="" info="" />--}}
{{--            <x-camp image="" title="" info="" />--}}

            <div class="d-flex justify-content-center">
                <img src="/images/squishmallows-2.png" alt="mini camp" class="img-fluid my-3 rounded" style="max-width: 525px; width: 100%; height: auto;">
            </div>
            <h2 class="text-center text-uppercase">&mdash; Squishmallow Jam &mdash;</h2>
            <p class="mt-3 text-center">
                Bring your own Squishmallow or squishy stuffed animal to class each week as we jam to popular kids tunes!!
                <br><br>
                February 20 - March 26
                <br>Tuesdays 6:30-7:15PM
                <br>Ages 3-5
                <br>
                Tuition: $149
                <br>
                Attire: Dancers can wear a leotard and tights or comfortable clothing/athletic attire. Ballet shoes or socks may be worn.
                <br><br>
                Parents may observe the last week of class!
            </p>
            <div class="d-flex justify-content-center my-4">
                <div class="btn btn-primary btn-lg">
                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll!</a>
                </div>
            </div>
            <hr class="my-3">
            <!-- -->
            <!-- -->
            <!-- -->
            <!-- -->

            <div class="d-flex justify-content-center">
                <img src="/images/broadway-babies-4.png" alt="baby in broadway outfit" class="img-fluid my-3 rounded" style="max-width: 525px; width: 100%; height: auto;">
            </div>
            <h2 class="text-center text-uppercase">&mdash; Broadway Babies Mini Session &mdash;</h2>
            <p class="mt-3 text-center">
                Broadway Babies is a beginning dance class for little ones and a caregiver! Get ready to move and groove in this fun, energetic class!
                <br>
                <br>February 22 - March 28
                <br>Thursdays 6:00-6:45PM
                <br>Ages 1-2
                <br>Tuition: $149
                <br>Attire: Dancers can wear a leotard and tights or comfortable attire. Ballet shoes, bare feet, socks, or sneakers are also approved.
                <br><br>Parents may observe the last week of class!
            </p>
            <div class="d-flex justify-content-center my-4">
                <div class="btn btn-primary btn-lg">
                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll!</a>
                </div>
            </div>
{{--            <hr class="my-3">--}}
            <!-- -->
            <!-- -->
            <!-- -->
            <!-- -->

{{--            <div class="d-flex justify-content-center">--}}
{{--                <img src="/images/Bluey.png" alt="little mermaid" class="img-fluid my-3 rounded" style="max-width: 525px; width: 100%; height: auto;">--}}
{{--            </div>--}}
{{--            <h2 class="text-center text-uppercase">&mdash; Bluey Dance Mini Session &mdash;</h2>--}}
{{--            <p class="mt-3 text-center">--}}
{{--                3, 2, 1 Dance Mode!! Join us for our Bluey-themed Dance Mini Session for boys & girls!--}}
{{--                <br>--}}
{{--                <br>Tuesdays 6:30-7:15PM--}}
{{--                <br>September 19 - October 24--}}
{{--                <br>Ages 4-6--}}
{{--                <br>Tuition: $120--}}
{{--                <br>--}}
{{--                Attire: Dancers can wear a leotard and tights or comfortable clothing/athletic attire. Ballet shoes or socks may be worn.--}}
{{--                <br><br>--}}
{{--                Parents will enjoy a mini-performance the last week of the class!--}}
{{--            </p>--}}
{{--            <div class="d-flex justify-content-center my-4">--}}
{{--                <div class="btn btn-primary btn-lg">--}}
{{--                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll!</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <hr class="my-3">--}}
            <!-- -->
            <!-- -->
            <!-- -->
            <!-- -->

{{--            <div class="d-flex justify-content-center">--}}
{{--                <img src="/images/mini-mermaid.png" alt="little mermaid" class="img-fluid my-3 rounded" style="max-width: 525px; width: 100%; height: auto;">--}}
{{--            </div>--}}
{{--            <h2 class="text-center text-uppercase">&mdash; The Little Mermaid Musical Theater Mini Session &mdash;</h2>--}}
{{--            <p class="mt-3 text-center">--}}
{{--                Sing, dance, and act it out in our Little Mermaid Musical Theater Mini Session, inspired by the popular animated movie. No experience is necessary.--}}
{{--                <br>--}}
{{--                <br>Mondays 6:45-7:30PM--}}
{{--                <br>October 2 - November 6--}}
{{--                <br>Ages 5-8--}}
{{--                <br>Tuition: $120--}}
{{--                <br>--}}
{{--                Attire: Kids should wear comfortable clothing/athletic attire and sneakers.--}}
{{--                <br><br>--}}
{{--                Parents will enjoy a mini-performance on the last day of class - November 6th!--}}
{{--            </p>--}}
{{--            <div class="d-flex justify-content-center my-4">--}}
{{--                <div class="btn btn-primary btn-lg">--}}
{{--                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll!</a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

    @include('footer')
@endsection
