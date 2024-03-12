<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use App\Models\Property;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class PropertyController extends Controller
{
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('properties.create');
    }

    public function store(PropertyRequest $request): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $request->validated();

        $photo = $request->file('photo')->storeAs('images', $request->file('photo')->getClientOriginalName(), 'public');

        (new Property)->create($request->only('title', 'bedrooms', 'bathrooms', 'location', 'price', 'type',
                'description') + ['photo' => $photo]);

        return redirect('/properties')->with('success', 'Property Created Successfully');
    }
}
