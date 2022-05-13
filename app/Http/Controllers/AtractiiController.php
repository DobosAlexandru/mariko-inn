<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtractiiController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $atractii = array(
            array(
                'index' => '1',
                'name'=>'Castelul Miclăușeni',
                'description'=>'Nunc sed nunc vitae diam pulvinar placerat in vel tellus. Phasellus purus mauris, dapibus sed auctor vel, lobortis non arcu. Vestibulum varius elementum blandit. Ut dapibus, mauris ultrices congue vulputate, est odio tincidunt risus, in suscipit felis ligula non nunc.',
                'distance' => '20min de Mariko Inn',
                'slug'=>'castelul-miclauseni',
                'secondary-image'=>'castelul-miclauseni-pic2'
            ),
            array(
                'index' => '2',
                'name'=>'Parcul Municipal Roman',
                'description'=>'Nunc sed nunc vitae diam pulvinar placerat in vel tellus. Phasellus purus mauris, dapibus sed auctor vel, lobortis non arcu. Vestibulum varius elementum blandit. Ut dapibus, mauris ultrices congue vulputate, est odio tincidunt risus, in suscipit felis ligula non nunc.',
                'distance'=>'10min de Mariko Inn',
                'slug'=>'parcul-municipal-roman',
                'secondary-image'=>'parcul-municipal-roman-pic2'
            ),
            array(
                'index' => '3',
                'name'=>'Castelul Miclăușeni',
                'description'=>'Nunc sed nunc vitae diam pulvinar placerat in vel tellus. Phasellus purus mauris, dapibus sed auctor vel, lobortis non arcu. Vestibulum varius elementum blandit. Ut dapibus, mauris ultrices congue vulputate, est odio tincidunt risus, in suscipit felis ligula non nunc.',
                'distance' => '20min de Mariko Inn',
                'slug'=>'castelul-miclauseni',
                'secondary-image'=>'castelul-miclauseni-pic2'
            ),
            array(
                'index' => '4',
                'name'=>'Parcul Municipal Roman',
                'description'=>'Nunc sed nunc vitae diam pulvinar placerat in vel tellus. Phasellus purus mauris, dapibus sed auctor vel, lobortis non arcu. Vestibulum varius elementum blandit. Ut dapibus, mauris ultrices congue vulputate, est odio tincidunt risus, in suscipit felis ligula non nunc.',
                'distance'=>'10min de Mariko Inn',
                'slug'=>'parcul-municipal-roman',
                'secondary-image'=>'parcul-municipal-roman-pic2'
            ),
        );
        return view('atractii',[
            'page' => [
                'title' => 'Atractii',
                'description' => '',
            ],
        ])->with('atractii',$atractii );
    }
}
