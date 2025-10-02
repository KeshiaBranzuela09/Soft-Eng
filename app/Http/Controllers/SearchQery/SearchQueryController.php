<?php

namespace App\Http\Controllers\SearchQery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchQueryController extends Controller
{
    //
    public function index()
    {
        return view('search.search');
    }
}
