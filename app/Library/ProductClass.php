<?php

namespace App\Library;

use App\Models\Product;
use App\Repositories\ProductRepository;

class ProductClass implements ProductRepository
{
    public function listAll(): \Illuminate\Http\JsonResponse
    {
        //protected $hidden=['created_at','updated_at']; //you can hide from model
        //$products = Product::all('id','title','description'); //get specific columns
        //$products = Product::select('id','title','description')->where('','')->get; //get specific columns using where

        $products = Product::all('id','title','description','category');
        return response()->json([
           'data' => $products
        ]);
    }
}
