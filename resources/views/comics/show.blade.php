@extends('layouts.general')

@section('content')
    <div class="py-5 bg-primary"></div>
    <main class="bg-white text-white position-relative h-100 py-4 position-relative">
        <img class="comic-detail-thumb shadow" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <div class="container py-3">
            <a class="text-white btn btn-warning" href="{{route('comics.edit', $comic)}}">Update</a>
            <form class="d-inline" action="{{ route('comics.destroy', $comic) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="deleteButton btn btn-danger ms-3">Delete</button>
                <button class="confirmDelete btn btn-danger d-none" type="submit">Yes, delete</button>
                <button class="undoDelete btn btn-outline-warning d-none">No, cancel.</button>
            </form>
        </div>

        <div class="h-100 container">

            <div class="row">
                <div class="col-8">
                    <h3 class="text-uppercase text-fg-dark">{{ $comic->title }}</h3>
                    <div class="d-flex justify-content-between align-items-stretch bg-success p-2">
                        <div>
                            <p class="price m-0 p-0">U.S. Price: <span class="text-white">{{ $comic->price }}</span></p>
                        </div>
                        <div>
                            <span class="text-uppercase">available</span>
                            <span class="border-start ps-2 text-uppercase">check availability</span>
                        </div>
                    </div>
                    <p class="text-dark py-3">{{ $comic->description }}</p>


                </div>
                <div class="col-4 h-100">
                    <p class="text-uppercase text-dark text-end">advertisement</p>
                    <img class="" src="/images/spot.jpg" alt="adv">
                </div>
            </div>
            <div class="row text-dark">
                <div class="col-6 p-2">
                    <h6>Talent</h6>
                    <div class="row mb-2 border-bottom border-top gx-0">
                        <div class="col-2">
                            <small>Art By:</small>
                        </div>
                        <div class="col">
                          {{--   @foreach ($artists as $artist)
                                @if ($loop->last)
                                    <span>{{ $artist }} </span>
                                @else
                                    <span>{{ $artist }}, </span>
                                @endif

                            @endforeach --}}
                            // artist
                        </div>
                    </div>
                    <div class="row border-bottom gx-0">
                        <div class="col-2">
                            <small>Written By:</small>
                        </div>
                        <div class="col">
                           {{--  @foreach ($writers as $writer)
                            @if ($loop->last)
                            <span>{{ $writer }} </span>
                        @else
                            <span>{{ $writer }}, </span>
                        @endif
                            @endforeach --}}
                            // Writers
                        </div>
                    </div>
                </div>
                <div class="col-6 p-2">
                    <h6>Specs</h6>
                    <div class="row gx-0 border-bottom border-top">
                        <div class="col p-2">
                            Series:
                        </div>
                        <div class="col p-2 text-uppercase text-primary">
                            {{$comic->series}}
                        </div>
                    </div>
                    <div class="row gx-0 border-bottom">
                        <div class="col p-2">
                            U.S. Price:
                        </div>
                        <div class="col p-2 text-uppercase">
                            {{$comic->price}}
                        </div>
                    </div>
                    <div class="row gx-0 border-bottom">
                        <div class="col p-2">
                            On Sale Date:
                        </div>
                        <div class="col p-2 text-uppercase">
                            {{$comic->sale_date}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
