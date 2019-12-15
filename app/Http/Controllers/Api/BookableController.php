<?php

namespace App\Http\Controllers\Api;

use App\Bookable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookableController extends Controller
{
    public function index()
    {
        return Bookable::all();
    }

    public function show($id)
    {
        return Bookable::findOrFail($id);
    }
}
