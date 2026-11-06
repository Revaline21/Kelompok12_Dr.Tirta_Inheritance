<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;

abstract class AboutController extends Controller {
    public function boot(): View {
        return view('about');
    }
}