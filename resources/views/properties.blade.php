@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="h1">Properties</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($properties as $property)
                <div class="col">
                    <div class="card h-100"
                         style="box-shadow: rgba(50, 50, 93, 0.25) 0 6px 12px -2px, rgba(0, 0, 0, 0.3) 0 3px 7px -3px;">
                        <div class="h-70">
                            <img src="{{ asset('storage/' . $property->photo) }}" class="card-img-top"
                                 alt="{{ $property->title }} Photo" style="height: 18rem; object-fit: contain">
                        </div>
                        <div class="card-body text-left" style="background-color: #f6f7f8; padding: 15px;">
                            <h3 class="card-title">{{ $property->title }}</h3>
                            <p class="card-text mb-2" style="color: #aeb3b8"><img
                                    src="{{ asset('images/location_on_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                    alt="">{{ $property->location }}</p>
                            <p class="card-text my-0 btn btn-primary" style="border-radius: 50px"><strong>${{ number_format($property->price, 2) }}</strong></p>
                        </div>
                        <div class="card-footer text-center" style="background-color: #15b8a7">
                            <strong class="text-light"><a href="{{ asset('properties/' . $property->id) }}" style="text-decoration: none; color: white">View Property</a></strong>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
