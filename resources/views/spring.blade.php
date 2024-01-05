@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    {{--    <div class="banner-show-wrap">--}}
    {{--        <div class="banner-show"></div>--}}
    {{--    </div>--}}
    <div class="my-5">
        <div class="container my-md-5 py-md-5">
            <h2 class="text-center text-uppercase">&mdash; Spring 2024 &mdash;</h2>
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
                <div class="btn btn-primary btn-lg shadow">
                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll Today!</a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
                <a href="/images/23-fall.pdf" target="_blank">
                    <img src="/images/23-fall-1.jpg" alt="fall flyer" class="img-fluid rounded">
                </a>
                <a href="/images/23-fall.pdf" target="_blank">
                    <img src="/images/23-fall-2.jpg" alt="fall flyer" class="img-fluid rounded">
                </a>
                <a href="/images/23-fall.pdf" target="_blank">
                    <img src="/images/23-fall-3.jpg" alt="fall flyer" class="img-fluid rounded">
                </a>
            </div>
            <div class="d-flex justify-content-center my-4">
                <div class="btn btn-primary btn-lg shadow">
                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll Today!</a>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
@endsection



{{--@extends('layouts.app')--}}
{{--@section('content')--}}
{{--    @include('social-nav')--}}
{{--    @include('navbar')--}}
{{--    --}}
{{--    <div class="my-5 py-md-5">--}}
{{--        <div class="container my-md-5 py-md-5">--}}
{{--            <h2 class="text-center text-uppercase">&mdash; Mini Sessions &mdash;</h2>--}}
{{--            <p class="text-center">Registration is Open!</p>--}}
{{--            <div class="row py-4">--}}
{{--                <div class="col-sm">--}}
{{--                    <img src="/images/encanto-magic.png" alt="encanto mini session" class="img-fluid shadow rounded my-3">--}}
{{--                </div>--}}
{{--                <div class="col-sm">--}}
{{--                    <div class="d-flex align-items-center" style="height: 100%;">--}}
{{--                        <div>--}}
{{--                            <h3>Encanto Magic Mini Session</h3>--}}
{{--                            <p>--}}
{{--                                Join us beginning May 4th and discover your magical gifts! Participants will enjoy the music of Encanto in this fun-filled, creative movement dance class. No experience is necessary. We can't wait for your child's magical journey to begin!--}}
{{--                            </p>--}}
{{--                            <p>--}}
{{--                                Thursdays 6:15-7:00PM--}}
{{--                                <br>May 4 - May 25--}}
{{--                                <br>Ages 4-6--}}
{{--                                <br>Tuition: $90--}}
{{--                                <br><br>Attire: Dancers can wear a leotard and tights or comfortable athletic attire. Encanto-inspired clothing is also welcome! Ballet shoes or socks should be worn.--}}
{{--                                <br><br>Parents will enjoy a mini-performance on the last week of class!--}}
{{--                            </p>--}}
{{--                            <div class="btn btn-primary btn-lg shadow">--}}
{{--                                <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll!</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    @include('footer')--}}
{{--@endsection--}}
