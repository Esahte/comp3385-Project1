@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="h1">Add New Property</h1>
        <div class="ps-4 pe-5 py-5 my-3 w-75 bg-body-tertiary rounded-3">
            <form>
                <div class="mb-3">
                    <label for="propertyTitle" class="form-label">Property Title</label>
                    <input type="text" class="form-control" id="propertyTitle" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3" required></textarea>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="rooms" class="form-label">No. of Rooms</label>
                        <input type="number" class="form-control" id="rooms" min="1" required>
                    </div>
                    <div class="col-md-6">
                        <label for="bathrooms" class="form-label">No. of Bathrooms</label>
                        <input type="number" class="form-control" id="bathrooms" min="1" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="price" class="form-label">Price</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" id="price" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="propertyType" class="form-label">Property Type</label>
                        <select class="form-select" id="propertyType" required>
                            <option value="">Select...</option>
                            <option value="house">House</option>
                            <option value="apartment">Apartment</option>
                            <option value="condo">Condo</option>
                            <option value="land">Land</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" required>
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Add Property</button>
            </form>
        </div>
    </div>
@endsection
