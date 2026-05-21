<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        // Cache the fully rendered HTML response for 24 hours (86400 seconds)
        // This makes the homepage load almost instantly for all visitors
        return Cache::remember('frontend.home.html', 86400, function () {
            return view('frontend.index')->render();
        });
    }
}
