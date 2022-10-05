<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Http\Resources\People\PeopleResource;
use App\Models\People;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getAll()
    {
        return PeopleResource::collection(People::all());
    }

    public function getOnly(People $people)
    {
        return new PeopleResource($people);
    }
}
