<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use Illuminate\Http\Request;

class FacilitatiController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $facilities = array(
            array(
                'face' => 'Cameră',
                'type' => 'Superior Double',
                'description' => 'Camerele Superior Double isi rasfata oaspetii cu o atmosfera calda si primitoare garantata prin designul modern perfect echilibrat cu elementele clasice. Facilitatile de lux asigura o experienta relaxanta si comfortabila.',
                'slug' => 'camera-superior-double',
                'images' => array(
                    '1' =>'camera-superior-double1',
                    '2' =>'camera-superior-double2',
                    '3' =>'camera-superior-double3',
                    '4' =>'camera-superior-double4',
                )
            ),
            array(
                'face' => 'Cameră',
                'type' => 'Superior Single',
                'description' => 'Camerele Superior Single isi rasfata oaspetii cu o atmosfera calda si primitoare garantata prin designul modern perfect echilibrat cu elementele clasice. Facilitatile de lux asigura o experienta relaxanta si comfortabila.',
                'slug' => 'camera-superior-single',
                'images' => array(
                    '1' =>'camera-superior-single1',
                    '2' =>'camera-superior-single2',
                    '3' =>'camera-superior-single3',
                    '4' =>'camera-superior-single4',
                )
            ),
            array(
                'face' => 'Cameră',
                'type' => 'Superior Double Lux',
                'description' => 'Camerele Superior Double Lux sunt incapatoare si comfortabile oferind un spatiu funcțional disponibil la preturi atractive.Camerele sunt disponibile cu sau fara mic dejun.',
                'slug' => 'camera-superior-double-lux',
                'images' => array(
                    '1' =>'camera-superior-single1',
                    '2' =>'camera-superior-single2',
                    '3' =>'camera-superior-single3',
                    '4' =>'camera-superior-single4',
                )
            ),
            array(
                'face' => 'Cameră',
                'type' => 'Twin pentru persoane cu dizabilități',
                'description' => 'Complex Hotelier Mariko Inn pune la dispozitia persoanelor cu dizabilitati o camera special amenajata si dotata, adaptata la nevoile acestora. Camera este disponibila cu sau fara mic dejun.',
                'slug' => 'camera-twin-pentru-persoane-cu-dizabilitati',
                'images' => array(
                    '1' =>'camera-superior-single1',
                    '2' =>'camera-superior-single2',
                    '3' =>'camera-superior-single3',
                    '4' =>'camera-superior-single4',
                )
            ),

        );
        $settings= Setting::all();
        return view('facilitati',[
            'page' => [
                'title' => 'Facilitati',
                'description' => '',
            ],
        ])->with('facilities',$facilities);
    }
}
