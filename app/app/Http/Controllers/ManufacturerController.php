<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Cotrollers;

use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    //
    public function create() {
        $manufacturers = Manufacturer::all();
        return view('manufacturer', compact('manufacturers'));
    }

    public function store(Request $request) {
        // return view('manufacturers.store');
        $manufacturer = new Manufacturer();
        $manufacturer->url = $request->input('url');
        $manufacturer->code = $request->input('code');
        $manufacturer->name = $request->input('name');
        $manufacturer->save();

        return view('manufacturers.store');
    }

    public function destroy(Manufacturer $manufacturer) {
        $manufacturer->delete();

        return view('manufacturers.destroy');
    }
}