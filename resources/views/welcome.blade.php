@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-center text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 d-flex align-items-center justify-content-center">
                <div>
                    <p class="text-center pb-0 mb-0" style="font-size: 2.5em;">
                        <ion-icon name="construct-outline"></ion-icon>
                    </p>
                    <p class="text-center pt-0 mt-0">
                        <em>
                            Our website is currently under construction.
                            <br>A new refresh is coming soon!
                        </em>
                    </p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="/images/expressions-logo.png" alt="expressions dance theatre logo" class="img-fluid" style="height: 300px; width: auto;">
            </div>
            <div class="col-sm-5 d-flex align-items-center">
                <a href="https://app.akadadance.com/customer/login?schoolId=AK235599J" target="_blank" class="mx-2">
                    <div class="btn btn-lg btn-primary">Register</div>
                </a>
                <a href="https://app.akadadance.com/customer/login?schoolId=AK235599J" target="_blank" class="mx-2">
                    <div class="btn btn-lg btn-outline-primary">Account Login</div>
                </a>
                <a href="/images/edt-dress-code.pdf" target="_blank" class="mx-2">
                    <div class="btn btn-lg btn-outline-secondary">Dress Code</div>
                </a>
            </div>
        </div>
    </div>
</div>

<h2 class="text-center mt-4">Programs</h2>
<div class="d-flex justify-content-center">

</div>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col-sm">
                <a href="/images/edt-programs.pdf" target="_blank">
                    <img src="/images/edt-programs-1.jpg" alt="programs" class="img-fluid rounded shadow">
                </a>
            </div>
            <div class="col-sm">
                <a href="/images/edt-programs.pdf" target="_blank">
                    <img src="/images/edt-programs-2.jpg" alt="programs" class="img-fluid rounded shadow">
                </a>
            </div>
            <div class="col-sm">
                <a href="/images/edt-programs.pdf" target="_blank">
                    <img src="/images/edt-programs-3.jpg" alt="programs" class="img-fluid rounded shadow">
                </a>
            </div>
        </div>
    </div>
</div>
<div id="footer" style="background: #282c2f;" class="py-4 mt-5">
    <div class="container">
        <div class="text-center text-muted" style="font-size: 0.85em;">
            © 2021 Expressions Dance Theatre
            <br>2434 High Street, Crescent Springs, KY 41017
            <br>(859) 344-8489 / Monday - Thursday, 3:30 - 8:30 PM
        </div>
    </div>
</div>

@endsection
