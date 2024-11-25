<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Pricing;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return ['hello' => 'to the world!'];
});

Route::get('pricing', function () {
    return view('pricing', ['pricing' => Pricing::all()
    ]);
});

Route::get('pricing/{id}', function ($id) {
    $price = Pricing::find($id);
    return view('price', ['price' => $price]);
});
