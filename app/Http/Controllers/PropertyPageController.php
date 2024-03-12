<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class PropertyPageController extends Controller
{
    public function index(int $id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('property_page', ['properties' => (new Property)->find($id)]);
    }
}
