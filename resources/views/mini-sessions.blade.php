@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    <div class="py-5">
        <div class="container my-md-5 py-md-5">
                        <h1 class="text-center text-uppercase">&mdash; Mini Sessions &mdash;</h1>
            <x-camp
                image="moana-mini-session.png"
                title="Moana Mini Session"
                info="
Don’t miss out on this amazing adventure in the New Year! Our Moana dance session is all about fun, creativity, and exploring movement, all inspired by the popular movie!
<br>🌺 low commitment
<br>🌺 no extra fees
<br>🌺 fun guaranteed!
<br>🌺 $159 + tax
<br>Enrollment starts now!
" />
{{--            <x-camp--}}
{{--            image="mini-jingle-jam.png"--}}
{{--            title="Jingle Jam Mini Session"--}}
{{--            info="Join us for some holiday fun!--}}
{{--            <br>Tuition: $139--}}
{{--<br>$50 non-refundable deposit required--}}
{{--<br>Attire: Dancewear and ballet shoes are encouraged, but not required to enjoy the class. Please dress your child in play clothes and sneakers as an alternative."--}}
{{--            />--}}

{{--            <x-camp--}}
{{--                image="session-1.png"--}}
{{--                title="Broadway Babies Mini Session "--}}
{{--                info="--}}
{{--Broadway Babies is a beginning dance class for little ones and a caregiver! Get ready to move and groove in this fun, energetic class!--}}
{{--<br>--}}
{{--<br>Tuition: $159--}}
{{--<br>$50 non-refundable deposit required--}}
{{--<br>Attire: Dancers can wear a leotard and tights or comfortable attire. Ballet shoes, bare feet, socks, or sneakers are also approved.--}}
{{--"--}}
{{--                />--}}

{{--            <x-camp--}}
{{--                image="i-am-2.png"--}}
{{--                title="Tutus and Ties Mini Session"--}}
{{--                info='--}}
{{--Tutus and Ties is the perfect transition from our "mommy and me" style class to an independent class without the help of a caregiver. If your tot is at least two years old and does not have trouble separating from you, then they are ready for this next step at Expressions!--}}
{{--<br>--}}
{{--            <br>Tuition: $159--}}
{{--            <br>$50 non-refundable deposit required--}}
{{--            <br>Attire: Dancewear and ballet shoes are encouraged, but not required to essential to enjoy the class. Please dress your child in play clothes and sneakers as an alternative.--}}
{{--<br>--}}
{{--            <br>Parents may observe the last week of class!--}}
{{--'--}}
{{--            />--}}

{{--            <x-camp--}}
{{--            image="frozen-friends-24.png"--}}
{{--            title="Frozen Friends Mini Session"--}}
{{--            info="--}}
{{--Get ready to dance and twirl with Frozen Friends! This Frozen-themed mini session is the perfect place to explore dance and creative movement. No commitment, no extra fees, just a lot of Frozen FUN!--}}
{{--<br>Tuition: $159--}}
{{--<br>$50 non-refundable deposit required--}}
{{--<br>Attire: Dancewear and ballet shoes are encouraged!"--}}
{{--            />--}}

{{--            <x-camp--}}
{{--                image="session-3.png"--}}
{{--                title="Snoozy Snowflake Musical Theater Mini Session"--}}
{{--                info="--}}
{{--In this mini musical, Snoozy Snowflake is reluctant to fall in line with the tasks of the other snowflakes, which holds up the first snowfall of winter! With an easy-to-memorize rhyming script and songs, this show will be the perfect introduction to musical theater for young actors.--}}
{{--<br>--}}
{{--<br>This 8-week session includes a performance at St. Henry High School the weekend of December 13-14.--}}
{{--<br>--}}
{{--<br>Cost: $249 (includes costume & production fee)--}}
{{--"--}}
{{--            />--}}

        </div>
    </div>

    @include('footer')
@endsection
