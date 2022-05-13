<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $restaurants = array(
            array(
                'face' => 'Restaurant',
                'type' => 'Rustic',
                'description' => '<p>O componenta centrala a complexului este Restaurantul Rustic, cu o arhitectura si o ambianta autentic romaneasca. Bucatarul sef al restaurantului se va asigura ca aveti parte de o adevarata experienta a delicioasei bucatarii traditionale romanesti.</p>

                                  <p>Barul restaurantului pune la dispozitie o gama completa de cocktail-uri precum si o lista extinsa de vinuri si bere.</p>
                
                                  <p>Restaurantul Rustic este locatia perfecta pentru nunti, receptii sau petreceri private, avand o capacitate totala de <span class="font-bold">100 de locuri.</span></p>',
                'slug' => 'restaurant-rustic',
                'images' => array(
                    '1' =>'restaurant-rustic1',
                    '2' =>'restaurant-rustic2',
                    '3' =>'restaurant-rustic3',
                    '4' =>'restaurant-rustic4',
                )
            ),
            array(
                'face' => 'Restaurant',
                'type' => 'SteakHouse ',
                'description' => '<p>Restaurantul SteakHouse este locul ideal pentru a savura cea mai buna friptura din oras. Indifierent de tipul de friptura ales, bucatarii nostri vor oferi cele mai rafinate preparate, ce vor multumi chiar si pe cel mai pretentios oaspete.</p>

                                  <p>Cu o capacitate totala de <span class="font-bold">50 de locuri</span>, restaurantul isi invita oaspetii in fiecare zi.</p>',
                'slug' => 'restaurant-steakhouse',
                'images' => array(
                    '1' =>'restaurant-steakhouse1',
                    '2' =>'restaurant-steakhouse2',
                    '3' =>'camera-superior-single3',
                    '4' =>'camera-superior-single4',
                )
            ),
            array(
                'face' => 'Restaurant',
                'type' => 'High Class',
                'description' => '<p>La Restaurantul High Class, nuntile, petrecerile sau aniversarile sunt intotdeauna ocazii de neuitat. O sala de bal plina de farmec, personal prietenos, standarde ridicate ale serviciului oferit clientilor si meniurile speciale isi asteapta oaspetii.</p>

                                  <p>Restaurantul High Class are o capacitate totala de <span class="font-bold">260 de locuri si este disponibil pe baza de rezervare.</span></p>',
                'slug' => 'restaurant-high-class',
                'images' => array(
                    '1' =>'restaurant-high-class1',
                    '2' =>'restaurant-high-class2',
                    '3' =>'camera-superior-single3',
                    '4' =>'camera-superior-single4',
                )
            ),
            array(
                'face' => 'Restaurant',
                'type' => 'la terasă',
                'description' => '<p>Cu accente chic din lemn, Terasa este un loc luminos si aerisit, ideal pentru masa de pranz, cina, sau doar pentru a servi o bautura sau un aperitiv.</p>

                                  <p>Echipa noastra pregateste o gama larga de preparate contemporane ce imbina esenta si savoarea produselor locale romanesti precum si ingrediente rafinate – toate cu o tenta de unicitate adusa de bucatarii nostri.</p>
                
                                  <p>Lista completa de cocktail-uri, bere si vinuri isi rasfata oaspetii, contribuind la atmosfera relaxanta si confortabila.</p>
                
                                  <p class="font-bold">Terasa isi asteapta oaspetii in fiecare zi, incepand cu 1 Mai pana pe 1 Septembrie.</p>',
                'slug' => 'restaurant-la-terasa',
                'images' => array(
                    '1' =>'restaurant-la-terasa1',
                    '2' =>'restaurant-la-terasa2',
                    '3' =>'camera-superior-single3',
                    '4' =>'camera-superior-single4',
                )
            ),
            array(
                'face' => 'Restaurant',
                'type' => 'Pergola',
                'description' => '<p>Cu accente chic din lemn, Terasa este un loc luminos si aerisit, ideal pentru masa de pranz, cina, sau doar pentru a servi o bautura sau un aperitiv.</p>

                                  <p>Echipa noastra pregateste o gama larga de preparate contemporane ce imbina esenta si savoarea produselor locale romanesti precum si ingrediente rafinate – toate cu o tenta de unicitate adusa de bucatarii nostri.</p>
                
                                  <p>Lista completa de cocktail-uri, bere si vinuri isi rasfata oaspetii, contribuind la atmosfera relaxanta si confortabila.</p>
                
                                  <p class="font-bold">Terasa isi asteapta oaspetii in fiecare zi, incepand cu 1 Mai pana pe 1 Septembrie.</p>',
                'slug' => 'restaurant-la-terasa',
                'images' => array(
                    '1' =>'restaurant-la-terasa1',
                    '2' =>'restaurant-la-terasa2',
                    '3' =>'camera-superior-single3',
                    '4' =>'camera-superior-single4',
                )
            ),
  
        );

        return view('restaurant',[
            'page' => [
                'title' => 'Restaurant',
                'description' => '',
            ],
        ])->with('restaurants',$restaurants);
    }
}
