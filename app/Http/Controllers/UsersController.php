<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return new UserCollection(User::all());
    }

    public function show($id)
    {
        return new UserResource(User::findOrFail($id));
    }

    public function store(Request $request)
    {

    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(null, 204);
    }
}
