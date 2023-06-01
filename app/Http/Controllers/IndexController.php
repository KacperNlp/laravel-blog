<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index(Type $var = null)
    {
        return Inertia::render('Index/Index');
    }
}
