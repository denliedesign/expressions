@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

{{--        <div class="banner-show-wrap">--}}
{{--            <div class="banner-able-show"></div>--}}
{{--        </div>--}}
    <div class="my-5 py-md-5">
        <div class="container my-md-5 py-md-5">
            <div class="d-flex justify-content-center">
                <img src="/images/remarkable-logo.png" alt="" class="img-fluid" style="max-height: 200px; width: auto;">
            </div>
            <div class="d-flex justify-content-center my-4">
                <img src="/images/remarkable-1.jpg" alt="" class="img-fluid shadow rounded">
            </div>
            <h2 class="text-center text-uppercase">&mdash; RemarkABLE Movement &mdash;</h2>
            <p class="text-center big-font">
                We believe that music and rhythm is inside ALL of us, and no matter the limitation, everyone should be given the freedom to explore movement in their own way. Together with a caregiver, therapist, or dance "buddy", kids and teens with physical limitations and learning challenges will explore movement through exciting weekly dance classes through RemarkABLE Movement.
                <br><br>
                Each class will be taught by our certified Rhythm Works Integrative Dance Instructor and dedicated adult and student assistants.  There are several opportunities for our RemarkABLE dancers to perform for the community!  Our dancers have participated in the Down Syndrome Association of Greater Cincinnati Buddy Walk, Northern Kentucky Capernaum events, The Point Ark of Northern Kentucky social dances, Cincinnati Children’s Hospital fundraising events for the Division of Developmental and Behavioral Pediatrics, area nursing homes, and Expressions Dance Theatre shows.

            </p>
            <div class="row my-4">
                <div class="col-sm"><img src="/images/remarkable-2.jpg" alt="" class="img-fluid shadow rounded"></div>
                <div class="col-sm"><img src="/images/remarkable-3.jpg" alt="" class="img-fluid shadow rounded"></div>
                <div class="col-sm"><img src="/images/remarkable-4.jpg" alt="" class="img-fluid shadow rounded"></div>
            </div>

        </div>
    </div>

    @include('footer')
@endsection
