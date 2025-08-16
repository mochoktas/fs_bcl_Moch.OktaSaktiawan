<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Armada;
class TestController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function index_no_5()
    {
        $armada = Armada::all();
        // dd($location);

        return view('5', compact('armada'));
    }
    public function store_no_5(Request $request)
    {
        // dd($request->longitude);
        $armada = Armada::find($request->no_armada);
        // dd($armada);
        
        $armada->latitude = $request->latitude;
        $armada->longitude = $request->longitude;
        $armada->save();

        return redirect()->route('5');
    }
}
