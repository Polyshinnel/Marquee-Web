<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexPageController extends Controller
{
    public function __invoke()
    {
        return response()->view('Pages.IndexPage');
    }
}
