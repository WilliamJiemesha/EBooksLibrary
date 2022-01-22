<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Book Library</title>
</head>

<body>
    {{-- Header --}}
    @include('templates.header')

    {{-- Welcoming text --}}
    <div class="container welcome-container border-bottom">
        <div class="row justify-content-center align-self-center center">
            <p class="normal-text center home-defined-text">Welcome to Books For You</p>
        </div>
    </div>

    {{-- What is Books for You --}}
    <div class="container p-5 border-bottom">
        <div class="row d-flex align-items-center">
            <div class="col-6 center align-middle bg-green card-padding white-text border-radius-7 font-size-18">Books for You is a
                place that stores E-Books for you to
                download for
                FREE</div>
            <div class="col-6 center"><img class="card-size-image" src="{{ asset('images/suspicious.png') }}" alt="">
            </div>
        </div>
    </div>

    {{-- Why Books for You --}}
    <div class="container p-5 border-bottom">
        <div class="row d-flex align-items-center">
            <div class="col-6 center"><img class="card-size-image" src="{{ asset('images/grinning.png') }}" alt="">
            </div>
            <div class="col-6 center align-middle bg-green card-padding white-text border-radius-7 font-size-18">It is literally
                FREE for you to download</div>
        </div>
    </div>
    {{-- Previews --}}

    {{-- Footer --}}
    @include('templates.footer')
    </div>
</body>

</html>
