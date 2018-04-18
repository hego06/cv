<?php

namespace App\Http\Controllers\Category;

use App\CAtegory;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CategorySellerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $seller = $category->products()
        ->with('seller')
        ->get()
        ->pluck('seller')
        ->unique()
        ->values();

        return $this->showAll($seller);
    }
}
