<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Catalogue</title>
    @include('templates.imports')
</head>

<body>
    {{-- Header --}}
    @include('templates.header')

    <div class="container-fluid center">
        <div class="row normal-text center m-2">
            Search the name of your book below
        </div>
        <div class="row center mb-4">
            <input class="searchbox normal-text" type="text" placeholder="&#xf002; Search"
                style="font-family: FontAwesome, DM Sans; font-style: normal">
        </div>
    </div>

    <div class="container center">
        <div class="row center">
            <div class="col-auto d-flex align-items-stretch book-card center">
                <div class="">
                    <div class="book-cover">
                        <img src="{{ asset('images/subtleartofnotgivingafuck.jpg') }}" alt="">
                    </div>
                    <div class="book-content center">
                        <div class="book-title normal-text">Subtle Art of Not Giving a Fuck</div>
                        <div class="book-author normal-text">Author: Mark Manson</div>
                        <div class="book-author normal-text">Release: 2001-02-22</div>
                        <div class="book-author normal-text">Last Revision: 2021-02-22</div>
                        <div class="download-button">
                            <a href="{{ asset('images/subtleartofnotgivingafuck.jpg') }}"
                                download="bookname"><button>Download</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto d-flex align-items-stretch book-card center">
                <div class="">
                    
                        <div class="book-cover">
                            <img src="{{ asset('images/subtleartofnotgivingafuck.jpg') }}" alt="">
                        </div>
                        <div class="book-content center">
                            <div class="book-title normal-text">Subtle Art of Not a Fuck</div>
                            <div class="book-author normal-text">Author: Mark Manson</div>
                            <div class="book-author normal-text">Release: 2001-02-22</div>
                            <div class="book-author normal-text">Last Revision: 2021-02-22</div>
                            <div class="download-button">
                                <a href="{{ asset('images/subtleartofnotgivingafuck.jpg') }}"
                                    download="bookname"><button>Download</button></a>
                            </div>
                        </div>

                </div>
            </div>
            <div class="col-auto d-flex align-items-stretch book-card center">
                <div class="">

                        <div class="book-cover">
                            <img src="{{ asset('images/subtleartofnotgivingafuck.jpg') }}" alt="">
                        </div>
                        <div class="book-content center">
                            <div class="book-title normal-text">Subtle Art of Not Giving a Fuck</div>
                            <div class="book-author normal-text">Author: Mark Manson</div>
                            <div class="book-author normal-text">Release: 2001-02-22</div>
                            <div class="book-author normal-text">Last Revision: 2021-02-22</div>
                            <div class="download-button">
                                <a href="{{ asset('images/subtleartofnotgivingafuck.jpg') }}"
                                    download="bookname"><button>Download</button></a>
                            </div>
                        </div>

                </div>
            </div>
            <div class="col-auto d-flex align-items-stretch book-card center">
                <div class="">

                        <div class="book-cover">
                            <img src="{{ asset('images/subtleartofnotgivingafuck.jpg') }}" alt="">
                        </div>
                        <div class="book-content center">
                            <div class="book-title normal-text">Subtle Art of Not a Fuck</div>
                            <div class="book-author normal-text">Author: Mark Manson</div>
                            <div class="book-author normal-text">Release: 2001-02-22</div>
                            <div class="book-author normal-text">Last Revision: 2021-02-22</div>
                            <div class="download-button">
                                <a href="{{ asset('images/subtleartofnotgivingafuck.jpg') }}"
                                    download="bookname"><button>Download</button></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('templates.footer')
</body>

</html>
