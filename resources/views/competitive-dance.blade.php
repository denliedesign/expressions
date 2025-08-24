@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    {{--    <div class="banner-show-wrap">--}}
    {{--        <div class="banner-show"></div>--}}
    {{--    </div>--}}
    <div class="my-5 py-md-5">
        <div class="container my-md-5 py-md-5">
            <h2 class="text-center text-uppercase">&mdash; Our Teams &mdash;</h2>
            <div>
                <ul>

                    <li class="my-4"><strong>Sundancers</strong> - Expressions is home to the Sundancers, our competitive, travel dance team that has won numerous awards over the years at both the Regional and National levels. It spans a few generations now, making it a very special team to be a part of. Becoming a Sundancer is a great commitment. Dancers train weekly in “Track” level classes with a minimum requirement of classwork and the opportunity for electives. Enrollment in summer classes is also a prerequisite to auditions for the team in August. Sundancers travel to approximately 5 Regional competitions each year and Nationals every two years. For more detailed information about our Sundancer Team and requirements, please email info@nkydance.com.
                    </li>
                    <li class="my-4"><strong>Expressions Performance Team</strong> - Our Expressions Performance Team is the perfect fit for dancers who are not ready for the commitment and requirements of Sundancers or who just want a “taste” of the competitive dance world. Dancers will participate in a few competitions as well as two outside community performances. If you are interested in learning more about EPT, please contact us at info@nkydance.com.
                    </li>
                </ul>
            </div>
{{--            <p class="big-font">--}}
{{--                <strong>THE SUNDANCERS</strong>--}}
{{--                <br>Expressions is home to the Sundancers, our competitive dance team.  Our dancers train in ballet, tap, jazz, lyrical, hip hop, contemporary, and pointe, and have won at both the Regional and National levels over the past 20 years!  Sundancers have the opportunity to compete as soloists as well as in duets, trios, and group numbers.--}}
{{--                <br><br>--}}
{{--                <strong>COMMITMENT</strong>--}}
{{--                <br>Becoming a Sundancer is a great commitment.  Dancers train weekly in our Track level classes, taking two ballet classes, jazz, tap, and lyrical…and that is just the minimum requirement!  They are also required to take summer classes as well as workshops throughout the year.--}}
{{--                <br><br>--}}
{{--                <strong>2022-2023 TEAM AUDITIONS</strong>--}}
{{--                <br>Auditions for the 2022-2023 competition team will be held on August 12-13, 2022. We require dancers to take summer classes at EDT if they wish to audition for the next season. Please contact us for additional information and Summer 2022 class placement.--}}
{{--            </p>--}}
        </div>
    </div>

    @include('footer')
@endsection
