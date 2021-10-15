@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    {{--    <div class="banner-show-wrap">--}}
    {{--        <div class="banner-show"></div>--}}
    {{--    </div>--}}
    <div class="my-5 py-md-5">
        <div class="container my-md-5 py-md-5">
            <h2 class="text-center text-uppercase">&mdash; Competitive Dance &mdash;</h2>
            <p class="big-font">
                <strong>THE SUNDANCERS</strong>
                <br>Expressions is home to the Sundancers, our competitive dance team.  Our dancers train in ballet, tap, jazz, lyrical, hip hop, contemporary, and pointe, and have won at both the Regional and National levels over the past 20 years!  Sundancers have the opportunity to compete as soloists as well as in duets, trios, and group numbers.
                <br><br>
                <strong>COMMITMENT</strong>
                <br>Becoming a Sundancer is a great commitment.  Dancers train weekly in our Track level classes, taking two ballet classes, jazz, tap, and lyrical…and that is just the minimum requirement!  They are also required to take summer classes as well as workshops throughout the year.
                <br><br>
                <strong>2021-2022 TEAM AUDITIONS</strong>
                <br>We have already concluded our auditions for the 2021-2022 competition team. We require dancers to take summer classes at EDT if they wish to audition for the next season.  Please contact us for additional information on placement.
            </p>
        </div>
    </div>

    @include('footer')
@endsection
