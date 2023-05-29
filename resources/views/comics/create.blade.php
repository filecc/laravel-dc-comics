@extends('layouts.general')

@section('content')
    <main class="bg-fg-dark text-white position-relative h-100 py-4">
        <div class="container">
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image link</label>
                    <input type="text" class="form-control" name="thumb">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" name="series">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data Vendita</label>
                    <input type="date" class="form-control" name="sale_Date">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" style="height: 100px"></textarea>

                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-outline-danger">Reset</button>
              </form>
        </div>

    </main>
@endsection
