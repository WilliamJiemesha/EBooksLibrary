<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<nav class="navbar navbar-expand-lg navbar-light bg-default border-bottom">
    <div class="mx-auto w-50 order-0">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item d-flex align-items-center justify-content-center">
                <a href="">
                    <div class="rounded-image-background">
                        <img class="main-logo" src="{{ asset('images/mainlogo.png') }}" alt="">
                    </div>
                </a>
                <a class="normal-text normal-text-hyperlink" href="/"><b>Books for You</b></a>
            </li>
        </ul>
    </div>
    <div class="row mx-auto m-1">
        <div class="col-12">
            <div class="align-items-center justify-content-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                    aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

        </div>
    </div>
    <div class="navbar-collapse collapse" id="navbarToggler">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link navigation-item normal-text active" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navigation-item normal-text" href="#">Books</a>
            </li>
        </ul>
    </div>
    <div class="navbar-collapse collapse w-50" id="navbarToggler">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <a class="navbar-brand normal-text" href="#">Login as Admin</a>
        </ul>
    </div>
</nav>
