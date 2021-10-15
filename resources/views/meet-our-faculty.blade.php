@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

{{--    <div class="banner-show-wrap">--}}
{{--        <div class="banner-show"></div>--}}
{{--    </div>--}}
    <div class="my-5 py-md-5">
        <div class="container my-md-5 py-md-5">
            <h2 class="text-center text-uppercase">&mdash; Meet Our Faculty &mdash;</h2>
            <p class="text-center">Photos & Bios Coming Soon!</p>
            <ul class="list-group">
                <li class="list-group-item">Cara Patrick</li>
                <li class="list-group-item">Kaelyn Gray</li>
                <li class="list-group-item">Chelsea Massie</li>
                <li class="list-group-item">Caitlin Ackerman</li>
                <li class="list-group-item">Holly Mueller</li>
                <li class="list-group-item">Erin Laytart</li>
                <li class="list-group-item">Lori Wainscott</li>
                <li class="list-group-item">Jackie Heusner</li>
                <li class="list-group-item">Geena Hunt</li>
                <li class="list-group-item">Kerry Enders</li>
                <li class="list-group-item">Gabby Weber</li>
                <li class="list-group-item">Selena Ballou <span class="badge bg-secondary">Support Staff</span></li>
                <li class="list-group-item">Emily Dunn <span class="badge bg-secondary">Support Staff</span></li>
            </ul>
        </div>
    </div>

    @include('footer')
@endsection
