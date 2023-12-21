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
{{--                <li class="list-group-item">Holly Mueller</li>--}}
                <li class="list-group-item">Jessica Henwood</li>
                <li class="list-group-item">Lori Wainscott</li>
{{--                <li class="list-group-item">Jackie Heusner</li>--}}
                <li class="list-group-item">Gabby Weber</li>
                <li class="list-group-item">Jennifer Johnson</li>
                <li class="list-group-item">Flora McLeod</li>
                <li class="list-group-item">Lauren Sokol</li>
                <li class="list-group-item">Grace Evans</li>
                <li class="list-group-item">Jordan Perry</li>
                <li class="list-group-item">Riley Best</li>
                <li class="list-group-item">Erin Laytart <span class="badge bg-secondary">Office Assistant</span></li>
                <li class="list-group-item">Katie Elfers <span class="badge bg-secondary">Office Assistant</span></li>
                <li class="list-group-item">Stefanie Stubblefield <span class="badge bg-secondary">Office Assistant</span></li>
                <li class="list-group-item">Emily Dunn <span class="badge bg-secondary">Costume Manager</span></li>
            </ul>
        </div>
    </div>

    @include('footer')
@endsection
