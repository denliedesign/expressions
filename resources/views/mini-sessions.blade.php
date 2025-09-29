@extends('layouts.app')
@section('content')
    @include('social-nav')
    @include('navbar')

    <div class="py-5">
        <div class="container my-md-5 py-md-5">
                        <h1 class="text-center text-uppercase">&mdash; Mini Sessions &mdash;</h1>
            {{--            <x-camp--}}
            {{--                image=""--}}
            {{--                title=""--}}
            {{--                info=""--}}
            {{--            />--}}
                        <x-camp
                            image="mini-k-pop.jpg"
                            title="K-Pop Dance Camp"
                            info="
Join us for a 6-week mini session packed with <strong>K-Pop fun!</strong> The latest K-Pop movie music, dancing, and nonstop fun! 💃🕺
<br>&middot; ages 5-7: Wednesdays 6-6:45pm | October 15-November 19
<br>&middot; ages 8 & up: Tuesdays 7-7:45pm | October 14-November 1
"
                        />
{{--                        <x-camp--}}
{{--                            image="mini-bluey.png"--}}
{{--                            title="Bluey Dance Paw-ty: A Special Dance Class for Ages 18 Months to 3 Years"--}}
{{--                            info="Join us for a fun and engaging dance session inspired by everyone’s favorite pup, Bluey! Our Bluey Dance Paw-ty is designed to introduce young children to movement, rhythm, and creative play in a joyful and supportive environment. This class is perfect for toddlers who love to move, dance, and explore. Children will enjoy imaginative music-based activities and simple choreography built around the playful spirit of Bluey and friends. Please note: A grownup is required for younger dancers (under 3 years old) or any child who is not yet ready to participate independently. Let’s dance, play, and make new friends—Bluey style!"--}}
{{--                        />--}}
{{--                        <x-camp--}}
{{--                            image="adult-tap-new.png"--}}
{{--                            title="Adult Tap"--}}
{{--                            info="--}}
{{--<br>Looking for a fun, relaxed way to move and connect with other adults? Join our Adult Tap Session at Expressions Dance Theatre.--}}
{{--<br><strong>The first class is free!</strong>--}}
{{--<br>🗓 Tuesdays | Sept 2 – Oct 28--}}
{{--<br>⏰ 8:00–8:45PM--}}
{{--<br>📍 2641 Crescent Springs Pike, Erlanger, KY--}}
{{--<br>(No class Oct 7)--}}
{{--<br>Whether you're returning to tap or trying it for the first time, this upbeat adult tap session is perfect for all levels. Learn fun rhythms, get your feet moving, and unwind with a great community!--}}
{{--<br>PLUS… Join us on Nov 4 for a special end-of-session “Tappy Hour” at a local brewery just down the street!--}}
{{--<br>Tag a friend, lace up those tap shoes, and let’s make Tuesdays your favorite night of the week. 👯‍♀️--}}
{{--"--}}
{{--                        />--}}
{{--            <x-camp--}}
{{--                image="2025-mini-minions.jpg"--}}
{{--                title="Minion Mania"--}}
{{--                info="--}}
{{--Calling All Minions! Get ready to dance, jump, and groove at MINION MANIA! Join us for a fun-filled hip-hop adventure featuring:--}}
{{--<br>✨ High-energy Hip Hop Moves--}}
{{--<br>🎯 Action-packed Obstacle Courses--}}
{{--<br>💡 Epic Glow Party Fun--}}
{{--<br>Spots are filling up fast! Sign up today for just $129! Let's move it like a Minion!--}}
{{--"--}}
{{--            />--}}
{{--            <x-camp--}}
{{--                image="2025-mini-bees.png"--}}
{{--                title="Busy Bees"--}}
{{--                info="Our Busy Bees Mini Session is for young children who are ready to explore a creative movement class independently! We can't wait to see the kiddos buzzing around and having a great time!"--}}
{{--            />--}}
{{--            <x-camp--}}
{{--                image="mini-session-bluey.png"--}}
{{--                title="Bounce & Bop with Bluey"--}}
{{--                info="--}}
{{--<br>🐾 Get ready to BoUnCe and BoP with BLUEY!! 🐾--}}
{{--<br>Registration is now open for our newest session for little ones under the age of 4!--}}
{{--<br>Two class options are available on Saturday mornings beginning February 22: Ages 1-2 will require a caregiver to help their little one during the class and Ages 2.5-4 is for independent kiddos ready to enjoy the class on their own!--}}
{{--<br>🐾 6 weeks - $159--}}
{{--<br>🐾 No added fees--}}
{{--<br>🐾 Fun guaranteed!--}}
{{--<br>🐾 Dancewear is encouraged, but not required! Comfy clothes & sneakers are acceptable too 🙂--}}
{{--"--}}
{{--            />--}}
{{--            <x-camp--}}
{{--                image="mini-session-wicked.jpg"--}}
{{--                title="Dancing Through Life"--}}
{{--                info="--}}
{{--🎶 Ready to Defy Gravity? ✨ Our Dancing Through Life mini session is the ultimate Wicked-themed adventure for ages 4-9! 💚--}}
{{--<br>--}}
{{--<br>Join us every Tuesday, Feb 25 - April 1, from 6:15-7:15 PM, for a magical hour of singing, dancing, acting, and crafting inspired by the world of Oz! 🌈--}}
{{--<br>--}}
{{--<br>Don't miss this Oz-some opportunity to spark creativity and have a blast! 🌟--}}
{{--<br>Just $169--}}
{{--"--}}
{{--            />--}}
{{--            <x-camp--}}
{{--                image="moana-mini-session.png"--}}
{{--                title="Moana Mini Session"--}}
{{--                info="--}}
{{--Don’t miss out on this amazing adventure in the New Year! Our Moana dance session is all about fun, creativity, and exploring movement, all inspired by the popular movie!--}}
{{--<br>🌺 low commitment--}}
{{--<br>🌺 no extra fees--}}
{{--<br>🌺 fun guaranteed!--}}
{{--<br>🌺 $159 + tax--}}
{{--<br>Enrollment starts now!--}}
{{--" />--}}
{{--            <x-camp--}}
{{--                image="little-feet-mini-session.png"--}}
{{--                title="Little Feet"--}}
{{--                info="--}}
{{--Join us for a new dance mini session in the New Year for littles under age 4... Little Feet Love the Beat!--}}
{{--<br>Two class options are available on Saturday mornings: one for ages 1-2 that will require a caregiver to help them during class, and one for independent toddlers up to age 4!--}}
{{--<br>--}}
{{--<br>Dance attire is encouraged, but not required!--}}
{{--<br>Cost: $139 plus tax--}}
{{--" />--}}
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
