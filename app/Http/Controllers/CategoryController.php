<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Http\Resources\CategoryResources;
use App\Models\Category;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return CategoryResources
     */
    public function index()
    {
        return new CategoryResources(Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryStoreRequest $request
     * @return CategoryResource
     */
    public function store(CategoryStoreRequest $request)
    {
        $category = Category::create($request->validated());

        return new CategoryResource($category);
    }
}
