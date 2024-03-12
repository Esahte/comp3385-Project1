<?php

namespace App\Http\Controllers;

use App\Models\Property;

class PropertyListingController extends Controller
{
    public function index()
    {
        return view('properties', ['properties' => Property::all()]);
    }
}
