<?php

namespace App\Repositories;

use App\Contracts\ProductInterface;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;

class CachedProductRepository implements ProductInterface
{
    public $ttl = 120;

    public function listAll()
    {
        return Cache::remember('popular', $this->ttl, function () {
            return Product::popular()->get(['id', 'title']);
        });
    }
}
