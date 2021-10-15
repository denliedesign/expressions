@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    {{--    <div class="banner-show-wrap">--}}
    {{--        <div class="banner-show"></div>--}}
    {{--    </div>--}}
    <div class="my-5 py-md-5">
        <div class="container my-md-5 py-md-5">
            <h2 class="text-center text-uppercase">&mdash; Tuition & Fees &mdash;</h2>
            <p class="text-center">
                Annual membership fee and tuition installments are collected upon registration and are non-refundable. Tuition is a yearly amount broken into 10 equal monthly installments.
                We do require a credit card for automatic payments each month.
            </p>
            <div class="row mt-5">
                <div class="col-sm-8">
                    <div class="mb-5">
                        <h4 class="mb-0 pb-0">ANNUAL MEMBERSHIP FEE</h4>
                        <p>
                            This fee encompasses your annual registration, recital fee(s), recital shirt(s), unlimited makeup classes, and more depending on the member level you choose. Packages start at $100.
                        </p>
                    </div>
                    <div class="mb-5">
                        <h4>MUSICAL THEATER MONTHLY INSTALLMENT</h4>
                        <p>
                            Kids – $80
                            <br>Juniors – $80
                        </p>
                    </div>
                    <div class="mb-5">
                        <h4>COSTUME DEPOSITS & RECITAL FEES</h4>
                        <p>
                            Students participating in our shows are required to purchase costumes. Costume deposits are collected on September 15th for our Winter Show and January 15th for our Spring Recital.  Costume deposits range from $50-$100 per class.  In addition, a 6% sales tax will be added to each costume charge.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h4 class="text-center text-uppercase">2021-2022 Tuition Installments</h4>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>1 class</td>
                            <td>$62</td>
                        </tr>
                        <tr>
                            <td>2 classes</td>
                            <td>$109</td>
                        </tr>
                        <tr>
                            <td>3 classes</td>
                            <td>$156</td>
                        </tr>
                        <tr>
                            <td>4 classes</td>
                            <td>$199</td>
                        </tr>
                        <tr>
                            <td>5 classes</td>
                            <td>$242</td>
                        </tr>
                        <tr>
                            <td>6 classes</td>
                            <td>$282</td>
                        </tr>
                        </tbody>
                    </table>
                    <p class="text-center text-muted"><small>calculated per child</small></p>
                </div>
            </div>

        </div>
    </div>

    @include('footer')
@endsection
