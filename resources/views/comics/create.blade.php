@extends('layout.base')



@section('content')
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-5 ">
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    @method('POST')
                        <div class="mb-3">
                            <label for="title" class="form-label">title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">author</label>
                            <input type="text" class="form-control" id="author" name="author">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="genre" class="form-label">genre</label>
                            <input type="text" class="form-control" id="genre" name="genre">
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">photo</label>
                            <input type="text" class="form-control" id="photo" name="photo">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">price</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price">
                        </div>
                    
                        <button type="submit" class="btn btn-danger">Save</button>
                    </form>

            </div>
            
        </div>
    </div>

@endsection