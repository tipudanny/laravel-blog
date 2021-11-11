<?php

namespace App\Repositories;

use App\Contracts\ProductInterface;
use App\Models\Product;

class ProductRepository implements ProductInterface
{
    public function listAll()
    {
        //protected $hidden=['created_at','updated_at']; //you can hide from model
        //$products = Product::all('id','title','description'); //get specific columns
        //$products = Product::select('id','title','description')->where('','')->get; //get specific columns using where

        return Product::all('id','title','description','category');
    }
}
