<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;

abstract class BlogController extends Controller {
    public function boot(): View {
        return view('blog');
    }
}