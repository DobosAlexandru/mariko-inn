<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use Illuminate\Http\Request;

class EvenimenteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $evenimente = array(
            array(
                'index' => '1',
                'name'=>'Nunti',
                'description'=>'Nunc sed nunc vitae diam pulvinar placerat in vel tellus. Phasellus purus mauris, dapibus sed auctor vel, lobortis non arcu. Vestibulum varius elementum blandit. Ut dapibus, mauris ultrices congue vulputate, est odio tincidunt risus, in suscipit felis ligula non nunc.',
                'slug'=>'nunti-mariko-inn',
                'secondary-image'=>'nunti-mariko-inn2'
            ),
            array(
                'index' => '2',
                'name'=>'Botezuri',
                'description'=>'Nunc sed nunc vitae diam pulvinar placerat in vel tellus. Phasellus purus mauris, dapibus sed auctor vel, lobortis non arcu. Vestibulum varius elementum blandit. Ut dapibus, mauris ultrices congue vulputate, est odio tincidunt risus, in suscipit felis ligula non nunc.',
                'slug'=>'botezuri-mariko-inn',
                'secondary-image'=>'botezuri-mariko-inn2'
            ),
        );
        $settings= Setting::all();
        return view('evenimente',[
            'page' => [
                'title' => 'Evenimente',
                'description' => '',
            ],
        ])->with('evenimente',$evenimente );
    }
}
