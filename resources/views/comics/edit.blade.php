@extends('layouts.general')

@section('content')
    <main class="bg-fg-dark text-white position-relative h-100 py-4">
        <div class="container">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control  @error('title') is-invalid @enderror" name="title" value="{{$comic->title}}">
                  @error('title')
                  <div class="alert alert-danger mt-2">{{ $message }}</div>
              @enderror
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image link</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" value="{{$comic->thumb}}">
                    @error('thumb')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$comic->price}}">
                    @error('price')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control  @error('series') is-invalid @enderror" name="series" value="{{$comic->series}}">
                    @error('series')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data Vendita</label>
                    <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" value="{{$comic->sale_date}}">
                    @error('sale_date')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control  @error('description') is-invalid @enderror" name="description" style="height: 100px">
                        {{$comic->description}}
                    </textarea>
                    @error('description')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror

                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-outline-danger">Reset</button>
              </form>
        </div>

    </main>
@endsection
