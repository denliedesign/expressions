@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    {{--    <div class="banner-show-wrap">--}}
    {{--        <div class="banner-show"></div>--}}
    {{--    </div>--}}
    <div class="my-5 py-md-5">
        <div class="container my-md-5 py-md-5">
            <h2 class="text-center text-uppercase">&mdash; Certifications & Recognition &mdash;</h2>
            <div class="row">
                <div class="col-sm d-flex align-items-center">
                    <ul class="list-group big-font">
                        <li class="list-group-item">Acrobatic Arts Certified Studio</li>
                        <li class="list-group-item">Licensed Kentucky Charter Member of "More Than Just Great Dancing"</li>
                        <li class="list-group-item">2019 Industry Dance Awards Nominee for "In Remembrance"</li>
                        <li class="list-group-item">2018 Industry Dance Awards Nominee for "Pump Up the Volume"</li>
                        <li class="list-group-item">Member of Dance Educators of America since 1999</li>
                        <li class="list-group-item">Affiliate Member of Association of Dance Conventions and Competitions</li>
                        <li class="list-group-item">Ambassador of Youth Protection Advocates in Dance (YPAD)</li>
                    </ul>
                </div>
                <div class="col-sm">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-3">
                        <div class="col"><img src="/images/logo-Acro-Arts.png" alt="" class="img-fluid"></div>
                        <div class="col"><img src="/images/logo-MTJGD-charter.png" alt="" class="img-fluid"></div>
                        <div class="col"><img src="/images/logo-Dance-Educators-Of-America.jpg" alt="" class="img-fluid"></div>
                        <div class="col"><img src="/images/logo-ADCC.jpg" alt="" class="img-fluid"></div>
                        <div class="col"><img src="/images/ypad-badge.png" alt="" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
@endsection
