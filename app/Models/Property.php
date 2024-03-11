<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    /**
     * The $fillable property is an array containing the names of the database columns
     * that can be mass assigned using Laravel Eloquent ORM (Object-Relational Mapping).
     *
     * This is a security measure to ensure that only the specified columns can be updated
     * when using mass assignment methods such as create() and update().
     *
     * @var array
     */
    protected $fillable = [
        'title',      // The title of the property
        'bedrooms',   // The number of bedrooms in the property
        'bathrooms',  // The number of bathrooms in the property
        'location',   // The location of the property
        'price',      // The price of the property
        'type',       // The type of the property (e.g., apartment, house, etc.)
        'description', // A description of the property
        'photo'       // A photo of the property
    ];
}
