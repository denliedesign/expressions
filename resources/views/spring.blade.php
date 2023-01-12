@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    {{--    <div class="banner-show-wrap">--}}
    {{--        <div class="banner-show"></div>--}}
    {{--    </div>--}}
    <div class="my-5 py-md-5">
        <div class="container my-md-5 py-md-5">
            <h2 class="text-center text-uppercase">&mdash; Mini Sessions &mdash;</h2>
{{--            <div class="d-flex justify-content-center">--}}
{{--                <img src="/images/fall-2022-heading.png" alt="spring heading" class="img-fluid rounded">--}}
{{--            </div>--}}
            <p class="text-center">Registration is Open!</p>

{{--            <div class="d-flex justify-content-center my-4">--}}
{{--                <div class="btn btn-primary btn-lg shadow">--}}
{{--                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll Today!</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">--}}
{{--                <a href="/images/fall-2022.pdf" target="_blank">--}}
{{--                    <img src="/images/fall-2022-a.png" alt="spring flyer" class="img-fluid rounded">--}}
{{--                </a>--}}
{{--                <a href="/images/fall-2022.pdf" target="_blank">--}}
{{--                    <img src="/images/fall-2022-b.png" alt="spring flyer" class="img-fluid rounded">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="d-flex justify-content-center my-4">--}}
{{--                <div class="btn btn-primary btn-lg shadow">--}}
{{--                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll Today!</a>--}}
{{--                </div>--}}
{{--            </div>--}}


            <!-- SPRING MINI SESSIONS 2023 -->

            <div class="row py-4">
                <div class="col-sm">
                    <img src="/images/mini-sing.png" alt="sing mini session" class="img-fluid shadow rounded my-3">
                </div>
                <div class="col-sm">
                    <div class="d-flex align-items-center" style="height: 100%;">
                        <div>
                            <h3>Sing and Dance Your Heart Out Mini Session</h3>
                            <p>
                                Our Sing and Dance Your Heart Out Mini Session starts on February 2nd. Inspired by the hit movie Sing 2, participants will sing and dance their way through 4 weeks of fun musical hits . No experience is necessary. If your little one loves to move and groove, this is the perfect class to join!
                            </p>
                            <p>
                                Thursdays 6:15-7:00PM
                                <br>February 2 - February 23
                                <br>Ages 4-6
                                <br>Tuition: $90
                                <br><br>
                                Attire: Dancers can wear a leotard and tights or comfortable athletic attire. Ballet shoes or socks should be worn.
                                <br><br>
                                Parents will enjoy a mini-performance on the last week of class!
                            </p>
                            <div class="btn btn-primary btn-lg shadow">
                                <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-4">
                <div class="col-sm">
                    <img src="/images/mini-frozen.png" alt="frozen mini session" class="img-fluid shadow rounded my-3">
                </div>
                <div class="col-sm">
                    <div class="d-flex align-items-center" style="height: 100%;">
                        <div>
                            <h3>Frozen Friends Mini Session</h3>
                            <p>
                                Did you hear the magical news? Our Frozen Friends Mini Session starts on March 2nd. Inspired by the hit movie Frozen, participants will dance their way through 5 weeks of magical adventures. No experience is necessary. If your little one loves Elsa, Anna, Olaf, and the crew, then this class is PERFECT for you!
                            </p>
                            <p>
                                Thursdays 6:15-7:00PM
                                <br>March 2 - March 30
                                <br>Ages 4-6
                                <br>Tuition: $112
                                <br><br>
                                Attire: Dancers can wear a leotard and tights or their favorite Frozen attire. Ballet shoes or socks should be worn.
                                <br><br>
                                Parents will enjoy a mini-performance on the last week of class!
                            </p>
                            <div class="btn btn-primary btn-lg shadow">
                                <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END OF SPRING MINI SESSIONS 2023 -->


        </div>
    </div>

    @include('footer')
@endsection
