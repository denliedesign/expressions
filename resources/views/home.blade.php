@extends('layouts.app')

@section('content')

    @include('social-nav')
    @include('navbar')

    <!------------------------MODAL------------------------->

    <!-- Modal -->
{{--    <div class="modal fade" id="summerModal" tabindex="-1" aria-labelledby="summerModalLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="summerModalLabel">FREE DANCE DAYS are BACK!!!</h5>--}}
{{--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <img src="/images/free-dance-days.png" alt="girl in dance studio smiling" class="img-fluid">--}}
{{--                    <p class="text-center my-2">--}}
{{--                        Join us the week of January 22-25 and sample a variety of classes for ages 4 and up! Space will be limited, so we ask that you complete the form below to reserve your child's spot! Come and see what EDT is all about!--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="modal-footer d-flex justify-content-center">--}}
{{--                    <a href="https://forms.gle/7Cx5H1YvfQ3mUJZc9" class="btn btn-primary" target="_blank">Reserve Your Spot!</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="d-flex justify-content-center">--}}
{{--        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 75%;">--}}
{{--            <img src="/images/Rudolph.png" alt="rudolph" style="width: 100%; height: auto;">--}}
{{--            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--            <p class="text-center pt-3" style="font-size: 2em;">Tickets $20/ea plus tax<br>For Advance Purchase Call <strong>859-344-8489</strong><br>Otherwise, Tickets Will Be Available At The Door</p>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!------------------------END MODAL------------------------->

    <div class="mb-5">
        <div>
            <div style="position: relative; width: 100%;">
{{--                <img src="/images/spring-banner.png" alt="spring mini sessions" style="width: 100%;">--}}
{{--                <img src="/images/summer-2023.png" alt="enroll summer" style="width: 100%;">--}}
                <img src="/images/header-july-23-crop.jpg" alt="little dancers in costume in a row" style="width: 100%;">
                <div style="background: linear-gradient(to bottom, transparent, rgba(0,0,0,.20)); height: 100%; width: 100%; position: absolute; top: 0; left: 0; z-index: 2;"></div>
                <div class="d-none d-sm-none d-md-block d-lg-block" style="position: absolute; bottom: 5%; left: 50%; transform: translate(-50%, -50%); width: 100%; z-index: 3;">
                    <h1 class="text-center text-white fw-bold" style="text-shadow: 2px 2px 4px black; font-size: 4em;">EQUIPPING DANCERS<br><span style="font-family: 'Allura', cursive;">Fueling Passion</span></h1>
{{--                    <h1 class="text-center text-white text-uppercase fw-bold" style="text-shadow: 2px 2px 4px black; font-size: 4em;">This is where you <span style="color: #E10100;">start</span>...<br>This is where you <span style="color: #E10100;">grow</span>!</h1>--}}
                </div>
            </div>
        </div>

{{--        <div class="d-flex justify-content-center mt-4">--}}
{{--            <img src="/images/enrollment-fair.png" alt="" class="img-fluid">--}}
{{--        </div>--}}

{{--        <video controls poster="/images/edt-fun.png" style="width: 100%;" class="rounded shadow">--}}
{{--            <source src="" type="video/mp4">--}}
{{--        </video>--}}
{{--        <div class="row d-flex justify-content-center align-items-center">--}}
{{--            <div class="col-sm">--}}
{{--                <img src="/images/gift-of-dance.png" alt="gift of dance" class="img-fluid">--}}
{{--            </div>--}}
{{--            <div class="col-sm">--}}
{{--                <img src="/images/bouncin-babes.png" alt="bouncin babes" class="img-fluid">--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    <div class="container">
        <div class="d-block d-sm-block d-md-none d-lg-none">
            <h1 class="text-center text-white text-uppercase fw-bold" style="text-shadow: 2px 2px 4px black; font-size: 4em;">This is where you <span style="color: #E10100;">start</span>...<br>This is where you <span style="color: #E10100;">grow</span>!</h1>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col"><img src="/images/make-your-move.jpg" class="img-fluid shadow rounded" alt=""></div>
            <div class="col d-flex align-items-center">
                <div>
                    <p style="font-size: 1.75em;">
                        If someone in your family is ready to start dance, we’re making it simple. Our programs are built for beginners of all ages. ✨
                        <br><br>They’re upbeat, supportive, and full of joyful learning, and it’s not too late to join the Expressions Dance Theatre family for the 2025–26 season.
                        <br><br>We’ve been waiting for you, so save your spot and we’ll see you in January!
                        <br><br>
                    </p>
                    <div class="">
                        <div class="btn btn-danger btn-lg">
                            <a class="text-white text-decoration-none" href="https://app.akadadance.com/customer/login?schoolId=AK235599J&c=1" target="_blank">Enroll Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="container">
            <h2 class="text-center">We Have Built a Reputation for Excellence in Dance Instruction</h2>
            <p class="text-center big-font">
                From your child’s first class to their graduation performance, EDT has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, EDT is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.
            </p>
{{--            <div class="d-flex justify-content-center">--}}
{{--                <div class="btn btn-primary btn-lg">--}}
{{--                    <a class="text-white text-decoration-none" href="/images/24-25-class-guide-c.pdf" target="_blank">Find Your Class</a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

    <section class="mb-md-5 pb-md-5">
        <div class="my-5 pb-md-5">
            <div class="container">
                <div class="row row-cols-md-2">
                    <div class="col-md my-3">
                        <div class="rounded box-blue" style="min-height: 232px; height: max-content;">
                            <div class="py-3 px-4">
                                <div style="color: #3A706D; font-size: 75px; line-height: 0;" class="pt-2 m-0">&#8220;</div>
                                <div>
                                    We have been with Expressions for a few years, and it is difficult to put into words how impressed I've been. The productions are first class and the incredible teaching shines through the dancers' technique as well as the choreography. There is a place for everyone here; whether you are interested in competitive dance or recreational, your dancer will get amazing instruction along with discipline and fun. I can't imagine going anywhere else after having been with this amazing studio.
                                    <br>
                                    <strong style="color: #3A706D;">Sheridan L.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md my-3">
                        <div class="rounded box-yellow" style="min-height: 232px; height: max-content;">
                            <div class="py-3 px-4">
                                <div style="color: #857C22; font-size: 75px; line-height: 0;" class="pt-2 m-0">&#8220;</div>
                                <div>
                                    I’ve been the Dad that questions the cost. I’ve questioned every dollar. Seeing this group dominate Nationals makes it so much easier. It IS worth it! And being lucky enough to see Drake’s last performance is amazing. Thank you to the absolutely amazing staff, as well the phenomenal owner. My daughter is a better person because of you!
                                    <br>
                                    <strong style="color: #857C22;">Brian R.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md my-3">
                        <div class="rounded box-pink" style="min-height: 232px; height: max-content;">
                            <div class="py-3 px-4">
                                <div style="color: #9E4A56; font-size: 75px; line-height: 0;" class="pt-2 m-0">&#8220;</div>
                                <div>
                                    My daughter has been dancing with expressions for two years now, and it’s amazing how far she has come as a dancer in those two years. Each week she looks forward to going to class. She was diagnosed with slight anxiety and dancing has helped her get over that anxiety. The staff is great and the older kids that help out in class are wonderful! Always recommending the studio to others that are looking to start their child in dance class.
                                    <br>
                                    <strong style="color: #9E4A56;">Stephanie S.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md my-3">
                        <div class="rounded box-green" style="min-height: 232px; height: max-content;">
                            <div class="py-3 px-4">
                                <div style="color: #5A7838; font-size: 75px; line-height: 0;" class="pt-2 m-0">&#8220;</div>
                                <div>
                                    Teaching staff is incredible. They work tirelessly with the children and the performance is proof. Great group.
                                    <br>
                                    <strong style="color: #5A7838;">Patricia D.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md my-3">
                        <div class="rounded box-purple" style="min-height: 232px; height: max-content;">
                            <div class="py-3 px-4">
                                <div style="color: #6A4C6D; font-size: 75px; line-height: 0;" class="pt-2 m-0">&#8220;</div>
                                <div>
                                    We love Expressions! This is my daughter's first year dancing and she looks forward to it every week. She is 3, and they are so good with the "littles". She loves her teacher. The staff is friendly, and you feel very welcome every time you walk through the door. They are always there to answer questions with a smile. The winter show was amazing. I would recommend Expressions to anyone looking for the highest quality dance education for their kids.
                                    <br>
                                    <strong style="color: #6A4C6D;">Kimberly M.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md my-3">
                        <div class="rounded box-orange" style="min-height: 232px; height: max-content;">
                            <div class="py-3 px-4">
                                <div style="color: #9F4F25; font-size: 75px; line-height: 0;" class="pt-2 m-0">&#8220;</div>
                                <div>
                                    My daughter and son both take dance at Expressions. The teachers are all very talented and great with young kids. The recitals are amazing and very professional. My children love dance class! We love Expressions!
                                    <br>
                                    <strong style="color: #9F4F25;">Amanda R.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style="width: 100%; background: #ff0000; position: relative;" class="my-0 py-0">
        @include('waves-top')
        <div class="container text-white py-5">
            <h2 class="text-center mb-5">Why Choose Us?</h2>
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/badge-celebrate-25.png" alt="certifications" style="height: 125px; width: auto; filter: invert(100%);">
                    </div>
                        <p class="big-font text-center">Celebrating 25 Years in Business</p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/icon-cpr.png" alt="certifications" style="height: 125px; width: auto;">
                    </div>
                        <p class="big-font text-center">First Aid & CPR Certified Teachers & Staff</p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/icon-bg-check.png" alt="certifications" style="height: 125px; width: auto;">
                    </div>
                        <p class="big-font text-center">Background Checked Teachers & Staff</p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/logo-MTJGD-charter.png" alt="certifications" style="height: 125px; width: auto;">
                    </div>
                        <p class="big-font text-center">Licensed Kentucky Charter Member of More Than Just Great Dancing</p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/logo-tap-roots.png" alt="certifications" style="height: 125px; width: auto;">
                    </div>
                        <p class="big-font text-center">Tap Roots</p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/logo-dance-educators-of-america.png" alt="certifications" style="height: 125px; width: auto;">
                    </div>
                        <p class="big-font text-center">Member of Dance Educators of America</p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/logo-Acro-Arts.png" alt="certifications" style="height: 125px; width: auto;">
                    </div>
                        <p class="big-font text-center">Acrobatic Arts Certified Teachers</p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/icon-rhythm-works.png" alt="certifications" style="height: 125px; width: auto;">
                    </div>
                        <p class="big-font text-center">Certified Rhythm Works Integrative Dance Instructors</p>
                </div>
            </div>
        </div>
{{--        <div class="row my-0 py-0 text-white">--}}
{{--            <div class="col-sm d-none d-md-block" style="position: relative; height: 100vh;">--}}
{{--                <img src="/images/expressions-flamingos.jpg" alt="flamingo dancers" class="img-fluid rounded shadow" style="height: 400px; width: auto; position: absolute; top: 2%; left: 8%;">--}}
{{--                <img src="/images/expressions-registration.jpg" alt="dancers on stage" class="img-fluid rounded shadow" style="height: 400px; width: auto; position: absolute; top: 44%; left: 20%;">--}}
{{--            </div>--}}
{{--            <div class="col-sm d-md-none">--}}
{{--                <img src="/images/expressions-flamingos.jpg" alt="flamingo dancers" class="img-fluid rounded shadow" style="height: 400px; width: auto;">--}}
{{--                <img src="/images/expressions-registration.jpg" alt="dancers on stage" class="img-fluid rounded shadow" style="height: 400px; width: auto;">--}}
{{--            </div>--}}
{{--            <div class="col-sm">--}}
{{--                <img src="/images/safer-studio-logo.png" alt="safer studio logo" class="img-fluid">--}}
{{--                <h2 class="text-center">EDT is a Safer Studio™</h2>--}}
{{--                <p class="text-center big-font">--}}
{{--                    EDT focuses on a hierarchy of measures to create a Safer Studio™ environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleaning and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
        @include('waves-bottom')
    </div>

    <section id="ask-us-anything" class="mt-md-5 pt-md-5">
        <div class="my-5 pt-md-5">
            <div class="row">
                <div class="col-2 p-0 m-0" style="position: relative;">
{{--                    <div id="costumes"></div>--}}
{{--                    <div id="blue-costumes"></div>--}}
                </div>
                <div class="col-sm shadow rounded py-3 px-4 mt-2">
                    <h2 class="text-center">Ask Us Anything...</h2>
                    @include('contact.create')
                </div>
                <div class="col-sm p-0 m-0" style="position: relative;">
                    <div id="gloves"></div>
                    <div id="blue-gloves"></div>
                </div>
            </div>
        </div>
    </section>

{{--    <div class="" style="height: 100%; background: #C6EE56;">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm">--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <img src="/images/we-moved.png" alt="new facility" class="img-fluid">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm">--}}
{{--                    <div class="d-flex align-items-center justify-content-center" style="height: 100%;">--}}
{{--                        <h2 style="font-size: 2.5em;">--}}
{{--                            We have moved to a new home!--}}
{{--                            <br>We can't wait to share it with you when our classes begin on Monday, January 8th!--}}
{{--                        </h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--<div style="width: 100%"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=2434%20High%20Street,%20Crescent%20Springs,%20KY%2041017+(Expressions%20Dance%20Theatre)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>--}}
<div style="width: 100%"><div style="width: 100%"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=350&amp;hl=en&amp;q=2641%20Crescent%20Springs%20Pike,%20Erlanger,%20KY%2041017+(Expressions%20Dance%20Theatre)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div></div>


@include('footer')

@endsection
