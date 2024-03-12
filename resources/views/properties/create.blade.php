@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="h1">Add New Property</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="ps-4 pe-5 py-4 my-3 w-75 bg-body-tertiary rounded-3">
            <form action="{{ url('/property') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Property Title</label>
                    <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description" rows="3"
                              required>{{ old('description') }}</textarea>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="bedrooms" class="form-label">No. of Rooms</label>
                        <input name="bedrooms" type="number" class="form-control" id="bedrooms" min="1"
                               value="{{ old('bedroom') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="bathrooms" class="form-label">No. of Bathrooms</label>
                        <input name="bathrooms" type="number" class="form-control" id="bathrooms" min="1"
                               value="{{ old('bathroom') }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="price" class="form-label">Price</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input name="price" type="number" class="form-control" id="price" value="{{ old('price') }}"
                                   required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="type" class="form-label">Property Type</label>
                        <select name="type" class="form-select" id="type" required>
                            <option value="">Select...</option>
                            <option value="House">House</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Condo">Condo</option>
                            <option value="Land">Land</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input name="location" type="text" class="form-control" id="location" value="{{ old('location') }}"
                           required>
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input name="photo" type="file" class="form-control" id="photo" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Add Property</button>
            </form>
        </div>
    </div>
@endsection
