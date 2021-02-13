<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Photos;
use App\Http\Resources\Photos as PhotosResource;
use App\Http\Resources\PhotosCollection;


class PhotosController extends Controller
{
    public function index()
    {
        return new PhotosCollection(Photos::all());
    }

    public function show($id)
    {
        return new PhotosResource(Photos::findOrFail($id));
    }

    public function store(Request $request)
    {

    }

    public function delete($id)
    {
        $user = Photos::findOrFail($id);
        $user->delete();

        return response()->json(null, 204);
    }

}
