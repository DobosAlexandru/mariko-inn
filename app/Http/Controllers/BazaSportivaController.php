<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BazaSportivaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $sportives = array(
            array(
                'face' => 'Baza Sportiva',
                'type' => 'Lorem ipsum',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'slug' => 'teren-tenis1',
                'images' => array(
                    '1' =>'restaurant-rustic1',
                    '2' =>'restaurant-rustic2',
                    '3' =>'restaurant-rustic3',
                    '4' =>'restaurant-rustic4',
                )
            ),
            array(
                'face' => 'Baza Sportiva',
                'type' => 'Lorem ipsum',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'slug' => 'sala-fitness1',
                'images' => array(
                    '1' =>'restaurant-steakhouse1',
                    '2' =>'restaurant-steakhouse2',
                    '3' =>'camera-superior-single3',
                    '4' =>'camera-superior-single4',
                )
            ),

        );

        return view('baza-sportiva',[
            'page' => [
                'title' => 'Baza Sportiva',
                'description' => '',
            ],
        ])->with('sportives',$sportives);;
    }
}
