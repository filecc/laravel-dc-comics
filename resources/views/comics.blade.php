@extends('layouts.general')

@section('content')
<main class="bg-fg-dark text-white position-relative h-100 py-4">
    <div class="h-100">
        <p class="comicsHeader bg-primary position-absolute top-0 left-0 py-1 px-2 text-uppercase fs-4">current series</p>
        <div class="container py-4">
            <div class="row flex-wrap">
                @foreach ($comics as $comic)
                <div class="col-2 p-3 mb-4">
                    <img class="img-fluid h-100 thumb" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <a class="text-uppercase py-2" href="{{route('comic.show', ['id' => $loop->index, 'title' => $comic['title']])}}"> {{$comic['series']}}</a>
                </div>

            @endforeach

            </div>
        </div>
        <div class="text-center py-3">
            <button class="btn btn-primary text-uppercase rounded-0 text-white fw-bold px-5">load more</button>
        </div>
    </div>
</main>
@endsection
