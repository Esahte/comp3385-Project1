<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        return view('properties.create');
    }

    public function store(PropertyRequest $request)
    {
        $request->validated();

        $photo = $request->file('photo')->storeAs('images', $request->file('logo')->getClientOriginalName(), 'public');

        Property::create($request->only('title', 'bedrooms', 'bathrooms', 'location', 'price', 'type',
                'description') + ['photo' => $photo]);

        return redirect();
    }

    public function show(Property $property)
    {
        return $property;
    }

    public function update(PropertyRequest $request, Property $property)
    {
        $property->update($request->validated());

        return $property;
    }

    public function destroy(Property $property)
    {
        $property->delete();

        return response()->json();
    }
}
