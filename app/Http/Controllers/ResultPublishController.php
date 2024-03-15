<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultPublishController extends Controller
{
    public function create()
    {
        return view('Backend.result-publish.create');
    }
}
