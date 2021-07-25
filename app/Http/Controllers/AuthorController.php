<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorStoreRequest;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Resources\AuthorResource;
use Illuminate\Http\Response;


class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AuthorStoreRequest $request
     * @return AuthorResource
     */
    public function store(AuthorStoreRequest $request)
    {
        $author = Author::create($request->validated());

        return new AuthorResource($author);
    }

    /**
     * Display the specified resource.
     *
     * @param Author $author
     * @return void
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Author $author
     * @return void
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Author $author
     * @return void
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Author $author
     * @return void
     */
    public function destroy(Author $author)
    {
        //
    }
}
