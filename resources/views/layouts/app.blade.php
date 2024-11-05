<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Expressions Dance Theatre | Crescent Springs, KY</title>

    <!-- Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway&family=Roboto+Slab&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Fjalla+One&family=Lora&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Allura&display=swap');
    </style>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>


</head>
<body>

@if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert" style="position: absolute; z-index: 7; top: 25%; left: 50%; transform: translate(-50%, -50%);">
    <strong>Success</strong> {{ session()->get('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

{{--@include('social-nav')--}}
@yield('content')
<div id="bottom"></div>
{{--@include('footer')--}}

<script
    src="https://widgets.leadconnectorhq.com/loader.js"
    data-resources-url="https://widgets.leadconnectorhq.com/chat-widget/loader.js"
    data-widget-id="66cf3872f0610d340ec28087"  >
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollToPlugin.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js" defer></script>
<script src="/js/script.js" defer></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
