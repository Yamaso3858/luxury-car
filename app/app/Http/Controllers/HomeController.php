<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Manufacturer;

class HomeController extends Controller
{
    public function index() {
        $manufacturers = Manufacturer::all();
        return view('home', compact('manufacturers'));
    }
}
