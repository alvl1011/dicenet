<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AngularController extends Controller
{
    /**
     * Creates Angular view
     *
     * @return Application|Factory|View
     */
    public function index() {
        return view('angular');
    }
}
