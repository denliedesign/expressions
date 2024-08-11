@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    <div class="py-5">
        <div class="container my-md-5 py-md-5">
                        <h1 class="text-center text-uppercase">&mdash; Mini Sessions &mdash;</h1>

            <x-camp
                image="session-1.png"
                title="Broadway Babies Mini Session "
                info="
Broadway Babies is a beginning dance class for little ones and a caregiver! Get ready to move and groove in this fun, energetic class!
<br>
<br>Tuition: $159
<br>$50 non-refundable deposit required
<br>Attire: Dancers can wear a leotard and tights or comfortable attire. Ballet shoes, bare feet, socks, or sneakers are also approved.
"
                />

            <x-camp
                image="session-2.png"
                title="Tutus and Ties Mini Session"
                info='
Tutus and Ties is the perfect transition from our "mommy and me" style class to an independent class without the help of a caregiver. If your tot is at least two years old and does not have trouble separating from you, then they are ready for this next step at Expressions!
<br>
            <br>Tuition: $159
            <br>$50 non-refundable deposit required
            <br>Attire: Dancewear and ballet shoes are encouraged, but not required to essential to enjoy the class. Please dress your child in play clothes and sneakers as an alternative.
<br>
            <br>Parents may observe the last week of class!
'
            />

            <x-camp
                image="session-3.png"
                title="Snoozy Snowflake Musical Theater Mini Session"
                info="
In this mini musical, Snoozy Snowflake is reluctant to fall in line with the tasks of the other snowflakes, which holds up the first snowfall of winter! With an easy-to-memorize rhyming script and songs, this show will be the perfect introduction to musical theater for young actors.
<br>
<br>This 8-week session includes a performance at St. Henry High School the weekend of December 13-14.
<br>
<br>Cost: $249 (includes costume & production fee)
"
            />

        </div>
    </div>

    @include('footer')
@endsection
