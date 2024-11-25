<?php
namespace App\Models;
use Illuminate\Support\Arr;

class Pricing{
    public static function all() : array
    {
        return [
            [
                'id' => '1',
                'title' => 'pro',
                'money' => '$10'
            ],
            [
                'id' => '2',
                'title' => 'deluxe',
                'money' => '$20'
            ],
        ];
    }
    public static function find(int $id) : array
    {
        $price = Arr::first(static::all(),function ($price) use($id){
            return $price['id'] == $id;
        });
        if (!$price){
            abort(404);
        }
        return $price;
    }
}
