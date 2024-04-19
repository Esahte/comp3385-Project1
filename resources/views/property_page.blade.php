@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="h1">Property</h1>
        <div class="card mb-3 h-100 w-100">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $properties->photo) }}" class="img-fluid rounded-start h-100 object-fit-fill"
                         alt="{{ $properties->title }} Photo">
                </div>
                <div class="col-md-8">
                    <div class="card-body text-left">
                        <h3 class="card-title">{{ $properties->title }}</h3>
                        <div class="my-3">
                            <button class="card-text my-0 btn btn-primary" style="border-radius: 50px">
                                ${{ number_format($properties->price, 2) }}</button>
                            <button class="card-text my-0 btn
                            @if($properties->type == 'house')
                            btn-danger
                            @elseif($properties->type == 'apartment')
                            btn-primary
                            @elseif($properties->type == 'condo')
                            btn-warning
                            @elseif($properties->type == 'land')
                            btn-success
                            @endif
                            " style="border-radius: 50px">{{ $properties->type }}</button>
                        </div>
                        <p class="card-text" style="overflow: auto">{{ $properties->description }}</p>
                        <div class="my-2"><span class="card-text mb-2 me-3"><img
                                    class="me-2"
                                    src="{{ asset('images/bed_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                    alt="">{{ $properties->bedrooms }} Bedrooms</span>
                            <span class="card-text mb-2"><img
                                    class="me-2"
                                    src="{{ asset('images/bathroom_FILL1_wght400_GRAD0_opsz24.svg') }}"
                                    alt="">{{ $properties->bathrooms }} Bathrooms</span></div>
                        <p class="card-text mb-2"><img
                                src="{{ asset('images/location_on_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                alt="">{{ $properties->location }}</p>
                        <button class="btn my-2" style="background-color: #15b8a7; color: #fff">Email Realtor</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
