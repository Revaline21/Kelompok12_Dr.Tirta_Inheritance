<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;

abstract class HomeController extends Controller {
    public function boot(): View {
        return view('home');
    }
}