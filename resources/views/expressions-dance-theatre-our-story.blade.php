@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    <div class="banner-show-wrap">
        <div class="banner-show"></div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h2 class="text-center">&mdash; OUR STORY &mdash;</h2>
                    <p class="big-font">
                        Expressions was originally established as “Dynamic Expressions” in 1978 under the direction of Connie Baynum. Upon her retirement in 1998, ownership and direction transferred to her daughter, Cara Patrick.
                        <br><br>
                        In 1999, after completing her education and working professionally as a dancer and choreographer, Cara opened Expressions Dance Theatre with 37 students and two very small classrooms. She and her staff have continued the tradition of excellence started by her mother and have dedicated themselves to the quality training of each student for over 20 years.
                        <br><br>
                        Today, Expressions Dance Theatre occupies a 5-studio location in Erlanger, KY. Over 400 students call Expressions Dance Theatre home.
                        <br><br>
                        Our mission is to offer a holistic creative arts program, taught by a highly accredited faculty, emphasizing technical quality and creative expression in dance.

                    </p>
                </div>
                <div class="col-sm">
                    <img src="/images/edt-fun.png" alt="" class="img-fluid shadow rounded my-5 d-md-none">
                    <h2 class="text-center text-uppercase">&mdash; Why Choose Expressions? &mdash;</h2>
                    <div>
                        <div class="checklist-group-item">
                            <div class="d-flex align-items-center">
                                <ion-icon name="checkmark" style="font-size: 1.33em; background: #ff0000; color: white;" class="p-1 rounded shadow"></ion-icon>
                                <span class="fw-bold big-font" style="font-family: 'Fjalla One', sans-serif;">&nbsp; Teachers</span>
                            </div>
                            <p>
                                Our teachers are passionate about teaching and focused on developing a strong technical foundation, artistry, and performance quality in each dancer. Each staff member is also background-checked and has been CPR/AED Trained and Certified.
                            </p>
                        </div>
                        <div class="checklist-group-item">
                            <div class="d-flex align-items-center">
                                <ion-icon name="checkmark" style="font-size: 1.33em; background: #ff0000; color: white;" class="p-1 rounded shadow"></ion-icon>
                                <span class="fw-bold big-font" style="font-family: 'Fjalla One', sans-serif;">&nbsp; Facility</span>
                            </div>
                            <p>
                                Our newly remodeled, 10,000 square foot, five-studio facility is equipped with its own parking lot, professionally-raised Marley flooring, secure full-length mirrors, mounted barres, and professionally-wired sound. A fully-stocked First Aid cabinet and AED Unit are also installed in a convenient location within the studio.
                            </p>
                        </div>
                        <div class="checklist-group-item">
                            <div class="d-flex align-items-center">
                                <ion-icon name="checkmark" style="font-size: 1.33em; background: #ff0000; color: white;" class="p-1 rounded shadow"></ion-icon>
                                <span class="fw-bold big-font" style="font-family: 'Fjalla One', sans-serif;">&nbsp; Performances</span>
                            </div>
                            <p>
                                Our shows are held at reputable theaters in the NKY/Cincinnati area, providing a professional performing experience for all students.
                            </p>
                        </div>
                        <div class="checklist-group-item">
                            <div class="d-flex align-items-center">
                                <ion-icon name="checkmark" style="font-size: 1.33em; background: #ff0000; color: white;" class="p-1 rounded shadow"></ion-icon>
                                <span class="fw-bold big-font" style="font-family: 'Fjalla One', sans-serif;">&nbsp; Programs</span>
                            </div>
                            <p>
                                We offer classes for every age and level of dancer, providing opportunities for dancers to start, stay, and grow at Expressions!
                            </p>
                        </div>
                        <div class="checklist-group-item">
                            <div class="d-flex align-items-center">
                                <ion-icon name="checkmark" style="font-size: 1.33em; background: #ff0000; color: white;" class="p-1 rounded shadow"></ion-icon>
                                <span class="fw-bold big-font" style="font-family: 'Fjalla One', sans-serif;">&nbsp; Syllabus</span>
                            </div>
                            <p>
                                All teachers follow a progressive, comprehensive syllabus that is crafted to build our dancers’ technique and performance skills level up on level and year upon year.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm"></div>

                <div class="col-sm"></div>
            </div>
        </div>
    </div>

    @include('footer')
@endsection
