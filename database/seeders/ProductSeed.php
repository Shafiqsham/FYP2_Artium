<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'Artist_Name'=>'Muhammad Nur Haikal',
                'Artwork_Name'=>'Man in Happiness',
                'Price'=>'50',
                'Material'=>'Canvas',
                'Colour'=>'Brown',
                'Dimension'=>'4x2, 2x2, 2x2(m)',
                'Brand'=>'Original',
                'Description'=>'The artwork is a representation of a man in happiness.
                            The bare colouration of the piece hekps to emulate the 
                            emotion of the art.',
                'Gallery'=>'file:///C:/Users/Muhammad%20Shafiq/OneDrive/Desktop/Prototype%20Raw%20Images/eg%20product.jpg',
            
            ],
            [
                'Artist_Name'=>'Muhammad Nur Haikal',
                'Artwork_Name'=>'Eastern Pottery',
                'Price'=>'50',
                'Material'=>'Antique',
                'Colour'=>'Black and Apple Wood',
                'Dimension'=>'',
                'Brand'=>'Original',
                'Description'=>'The artwork is about the legendary Eastern Pottery.
                            The design are mainly emulate the traditional culture 
                            of the country.',
                'Gallery'=>'file:///C:/Users/Muhammad%20Shafiq/OneDrive/Desktop/Prototype%20Raw%20Images/product%20arts.jpg',
            ],
            [
                'Artist_Name'=>'Muhammad Nur Haikal',
                'Artwork_Name'=>'Stampede',
                'Price'=>'40',
                'Material'=>'3D Frame',
                'Colour'=>'White',
                'Dimension'=>'4x2(m)',
                'Brand'=>'Original',
                'Description'=>'-',
                'Gallery'=>'https://image.shutterstock.com/image-illustration/seven-running-horses-wildlife-decorative-260nw-1754614820.jpg',
            
            ],
            [
                'Artist_Name'=>'Muhammad Nur Haikal',
                'Artwork_Name'=>'Contemplating',
                'Price'=>'50',
                'Material'=>'Clock',
                'Colour'=>'Silver',
                'Dimension'=>'=4x2(m)',
                'Brand'=>'Original',
                'Description'=>'-',
                'Gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSX47B0yQAEbi6QYzz3UvomAP4oCC0qrZl6BQ&usqp=CAU',
            
            ],
            [
                'Artist_Name'=>'Muhammad Nur Haikal',
                'Artwork_Name'=>'Flicker in the night',
                'Price'=>'39',
                'Material'=>'Canvas',
                'Colour'=>'Dark Mixture',
                'Dimension'=>'2x2(m)',
                'Brand'=>'Original',
                'Description'=>'The artwork is a representation of a Flicker in the night.
                                The beauty of the flickering light helps to illuminate the
                                shadows within ones mind.',
                'Gallery'=>'https://webneel.com/daily/sites/default/files/images/daily/04-2014/10-vector-artwork.jpg',
            
            ]
        ]);
    }
}
