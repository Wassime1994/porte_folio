<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')-> insert(
            [

            [
                'titre'=>'Je suis un être extraordinaire !' ,
                'description'=>"Je suis le meilleur , c est assez simple je trouve . Pas vous ?
                J arrive à m adapter a tous , et surtout réussir à en sortir plus fort !",
                'image'=>"https://media.istockphoto.com/videos/closeup-shot-of-an-ape-surrounded-by-blurred-rich-flora-during-a-video-id1150740505?s=640x640"
            ],
            [
                'titre'=>'Je un pokemon!' ,
                'description'=>"Je suis le meilleur , c est assez simple je trouve . Pas vous ?
                J arrive à m adapter a tous , et surtout réussir à en sortir plus fort !",
                'image'=>"https://media.istockphoto.com/videos/closeup-shot-of-an-ape-surrounded-by-blurred-rich-flora-during-a-video-id1150740505?s=640x640"
            ],
            [
                'titre'=>'Je suis un herisson !' ,
                'description'=>"Je suis le meilleur , c est assez simple je trouve . Pas vous ?
                J arrive à m adapter a tous , et surtout réussir à en sortir plus fort !",
                'image'=>"https://media.istockphoto.com/videos/closeup-shot-of-an-ape-surrounded-by-blurred-rich-flora-during-a-video-id1150740505?s=640x640"
            ],
            [
                'titre'=>'Je suis special !' ,
                'description'=>"Je suis le meilleur , c est assez simple je trouve . Pas vous ?
                J arrive à m adapter a tous , et surtout réussir à en sortir plus fort !",
                'image'=>"https://media.istockphoto.com/videos/closeup-shot-of-an-ape-surrounded-by-blurred-rich-flora-during-a-video-id1150740505?s=640x640"
            ],
            ]

             ) ;
    }
}
