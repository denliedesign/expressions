@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    <div class="py-5">
        <div class="container my-md-5 py-md-5">
            <h2 class="text-center text-uppercase">&mdash; Mini Sessions &mdash;</h2>

            <div class="d-flex justify-content-center">
                <img src="/images/Bluey.png" alt="little mermaid" class="img-fluid my-3 rounded" style="max-width: 525px; width: 100%; height: auto;">
            </div>
            <h2 class="text-center text-uppercase">&mdash; Bluey Dance Mini Session &mdash;</h2>
            <p class="mt-3 text-center">
                3, 2, 1 Dance Mode!! Join us for our Bluey-themed Dance Mini Session for boys & girls!
                <br>
                <br>Tuesdays 6:30-7:15PM
                <br>September 19 - October 24
                <br>Ages 4-6
                <br>Tuition: $120
                <br>
                Attire: Dancers can wear a leotard and tights or comfortable clothing/athletic attire. Ballet shoes or socks may be worn.
                <br><br>
                Parents will enjoy a mini-performance the last week of the class!
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
                <img src="/images/mini-mermaid.png" alt="little mermaid" class="img-fluid my-3 rounded" style="max-width: 525px; width: 100%; height: auto;">
            </div>
            <h2 class="text-center text-uppercase">&mdash; The Little Mermaid Musical Theater Mini Session &mdash;</h2>
            <p class="mt-3 text-center">
                Sing, dance, and act it out in our Little Mermaid Musical Theater Mini Session, inspired by the popular animated movie. No experience is necessary.
                <br>
                <br>Mondays 6:45-7:30PM
                <br>October 2 - November 6
                <br>Ages 5-8
                <br>Tuition: $120
                <br>
                Attire: Kids should wear comfortable clothing/athletic attire and sneakers.
                <br><br>
                Parents will enjoy a mini-performance on the last day of class - November 6th!
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
                <img src="/images/mini-broadway.png" alt="baby in broadway outfit" class="img-fluid my-3 rounded" style="max-width: 525px; width: 100%; height: auto;">
            </div>
            <h2 class="text-center text-uppercase">&mdash; Broadway Babies Mini Session &mdash;</h2>
            <p class="mt-3 text-center">
                Broadway Babies is a beginning dance class for little ones and a caregiver! Get ready to move and groove in this fun, energetic class!
                <br><br>
                Thursdays 6:00-6:45PM
                <br>October 5 - November 9
                <br>Ages 1-2
                <br>Tuition: $120

                <br>Attire: Dancers can wear a leotard and tights or comfortable attire. Ballet shoes, bare feet, socks, or sneakers are also approved.
                <br><br>
                During the last week of class, November 9, you are welcome to invite a guest to observe the class.
            </p>
            <div class="d-flex justify-content-center my-4">
                <div class="btn btn-primary btn-lg">
                    <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll!</a>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
@endsection
