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
            @if (empty($booksInformation))
                <div class="col">
                    <div class="no-result normal-text center">
                        <p style="margin-top: 10%">No results, try searching for another book</p>
                    </div>
                </div>
            @else
                @foreach ($booksInformation as $book)
                    <div class="col-auto d-flex align-items-stretch book-card center">
                        <div>
                            <div class="book-cover">
                                <img src="{{ asset('images/book_cover/' . $book->book_cover_name) }}" alt="">
                            </div>
                            <div class="book-content center">
                                <div class="book-title normal-text">{{ $book->book_name }}</div>
                                <div class="book-author normal-text">Author: {{ $book->book_author }}</div>
                                <div class="book-author normal-text">Release: {{ $book->book_release_date }}</div>
                                <div class="book-author normal-text">Last Revision: {{ $book->book_last_updated }}
                                </div>
                                <div class="download-button">
                                    <a href="{{ asset('pdf/books/' . $book->book_file_name) }}"
                                        download="{{$book->book_file_name}}"><button>Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            @endif


        </div>
    </div>



    {{-- Footer --}}
    @include('templates.footer')
</body>

</html>
