<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use App\Http\Resources\Albums as AlbumsResource;
use App\Http\Resources\AlbumsCollection;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index()
    {
        return new AlbumsCollection(Albums::all());
    }

    public function show($id)
    {
        return new AlbumsResource(Albums::findOrFail($id));
    }

    public function store(Request $request)
    {

    }

    public function delete($id)
    {
        $user = Albums::findOrFail($id);
        $user->delete();

        return response()->json(null, 204);
    }
}
