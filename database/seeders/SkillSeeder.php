<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')-> insert(
            [
            [
                'nom'=>'PHP' ,
                'description'=>'Assez simple . Les base de donnés n ont aucun secrets pour moi .' ,
                'difficulte'=>'4' ,
                'image'=>'https://i.pinimg.com/originals/26/17/9a/26179abe780f2d923e4af12f2854fc3b.jpg'
            ],
            [
                'nom'=>'Javascript' ,
                'description'=>'On est en maternelle ici ? Javascript, un jeu d enfant ! .' ,
                'difficulte'=>'2' ,
                'image'=>'https://wallpapercave.com/wp/wp5191399.jpg'
            ],
            [
                'nom'=>'HTML/CSS' ,
                'description'=>'Pas fan du front , un peu trop simple à mon goût' ,
                'difficulte'=>'1' ,
                'image'=>'https://www.ostraining.com//images/coding/html5-css3-hd.jpg'
            ],
            [
                'nom'=>'PYTHON' ,
                'description'=>'On commence enfin à parler la même langue .' ,
                'difficulte'=>'6' ,
                'image'=>'https://images.pling.com/img/00/00/04/64/67/1070400/41245-1.png'
            ],
            ]

        ) ;
    }
}
