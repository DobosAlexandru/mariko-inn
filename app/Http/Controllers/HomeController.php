<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $settings = Setting::all();
        return view('home', [
            'page' => [
                'title' => 'Home',
                'description' => 'Mariko Inn complex hotelier 3 stele Roman',
            ],
            'settings' => $settings
        ]);        
    }
}
