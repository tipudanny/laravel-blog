<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTestController extends TestCase
{
    use RefreshDatabase;

    /**
     *
     * @test
     */
    public function user_can_see_all_products()
    {
        $products = Product::factory()->count(5)->create();

        $this->getJson('/api/product')
            ->assertOk()
            ->assertJson([
                'data' => $products->toArray()
            ]);
    }

    /**
     *
     * @test
     */
    public function user_can_see_cached_products()
    {

        $products = Product::factory()->count(5)->create();

        $this->getJson('/api/product')
            ->assertOk()
            ->assertJson([
                'data' => $products->sortByDesc('id')->toArray()
            ]);
    }
}
