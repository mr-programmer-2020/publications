<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicationIndexRequest;
use App\Http\Requests\PublicationSearchByAuthorRequest;
use App\Http\Requests\PublicationSearchByTitleRequest;
use App\Http\Requests\PublicationShowRequest;
use App\Http\Requests\PublicationStoreRequest;
use App\Http\Resources\PublicationResource;
use App\Http\Resources\PublicationResources;
use App\Models\Publication;
use Illuminate\Database\Eloquent\Builder;


class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param PublicationIndexRequest $request
     * @return PublicationResources
     */
    public function index(PublicationIndexRequest $request)
    {

        $publications = Publication::query();

        if ($request->exists('author_id')) {
            $publications->where('author_id', $request->input('author_id'));
        }

        if ($request->exists('category_id')) {
            $publications->where('category_id', $request->input('category_id'));
        }

        return new PublicationResources($publications->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PublicationStoreRequest $request
     * @return PublicationResource
     */
    public function store(PublicationStoreRequest $request)
    {
        $publication = Publication::create($request->validated());

        return new PublicationResource($publication);
    }

    /**
     * Display the specified resource.
     *
     * @param PublicationShowRequest $request
     * @param Publication $publication
     * @return PublicationResource
     */
    public function show(PublicationShowRequest $request, Publication $publication)
    {
        return new PublicationResource($publication);
    }

    public function searchByAuthor(PublicationSearchByAuthorRequest $request)
    {
        $publications = Publication::whereHas('author', function (Builder $query) use ($request) {
            $query->where('full_name', 'like', "{$request->q}%");
        })->get();

        return new PublicationResources($publications);
    }

    public function searchByTitle(PublicationSearchByTitleRequest $request)
    {
        $publications = Publication::where('title', 'like', "%{$request->q}%")->get();

        return new PublicationResources($publications);
    }
}
