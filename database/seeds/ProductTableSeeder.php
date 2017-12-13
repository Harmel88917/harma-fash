<?php
use Illuminate\Database\Seeder;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         DB::table('products')->insert([
            'name' => 'Apple Macbook Pro',
            'slug' => 'macbook-pro',
            'description' => 'Apple is refreshed MacBook Pro line offers a thinner, lighter, and somewhat touch-sensitive vision of the MacOS flagship machines that has left many longtime Mac users a bit underwhelmed.',
            'price' => 1500.99,
            'image' => 'macbook-pro.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Headphones',
            'slug' => 'headphones',
            'description' => 'What genre of music do you usually listen to? Headphones have different sound signatures and some are more suited to certain genres than others.',
            'price' => 99.99,
            'image' => 'headphones.jpg',
        ]);
        
        DB::table('products')->insert([
            'name' => 'Black Nike Shoes',
            'slug' => 'Shoes Nike',
            'description' => 'A great fit for performance and everyday wear',
            'price' => 22.99,
            'image' => 'baby.jpg',
        ]);
        //what i have added

        DB::table('products')->insert([
            'name' => 'White Adidas Shoes',
            'slug' => 'White',
            'description' => 'Shop the latest selection of adidas running shoes. New styles and colors available',
            'price' => 39.99,
            'image' => 'sam.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Apple iPad Retina',
            'slug' => 'ipad-retina',
            'description' => 'The iPad is a sleek tablet that looks like a cross between an iPhone and the LCD case of the MacBook Air.',
            'price' => 300.99,
            'image' => 'ipad-retina.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Black Adidas Bag',
            'slug' => 'blackaddidasbag',
            'description' => 'Shop the latest selection of adidas running shoes. New styles and colors available here',
            'price' => 49.99,
            'image' => 'messi.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Electric Guitar',
            'slug' => 'electric-guitar',
            'description' => 'The electric guitar is used extensively in jazz, blues, R & B, and rock and roll. The first successful magnetic pickup for a guitar was invented by George Beauchamp, and incorporated.',
            'price' => 200.99,
            'image' => 'electric.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Black Nike Bag ',
            'slug' => 'Bag Nike',
            'description' => 'A great fit for performance and everyday wear, nice look',
            'price' => 44.99,
            'image' => 'tshabz.jpg',
        ]);

        //end here
        DB::table('products')->insert([
            'name' => 'Kappa Boot ',
            'slug' => 'kBoots',
            'description' => 'Smart thing for smart people',
            'price' => 79.99,
            'image' => 'david.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Black Kappa Bag',
            'slug' => 'kappa Bag',
            'description' => 'Smart shoes for smart people',
            'price' => 69.99,
            'image' => 'harmel.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Black Adidas Shoes ',
            'slug' => 'adidas black',
            'description' => 'Shop the latest selection of adidas running shoes. New styles and colors available at the online store today',
            'price' => 89.99,
            'image' => 'charles.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Nike Boot ',
            'slug' => 'nike boots',
            'description' => 'A great fit for performance and everyday wear.',
            'price' => 99.99,
            'image' => 'ngongo.jpg',
        ]);
        
        DB::table('products')->insert([
            'name' => 'Acoustic Guitar',
            'slug' => 'acoustic-guitar',
            'description' => 'The sound waves from the strings of an acoustic guitar resonate through the guitar is body, creating sound.',
            'price' => 150.99,
            'image' => 'acoustic.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Orange Timberland  ',
            'slug' => 'Boot Orange',
            'description' => 'New for our gag star customers, Temberland Boot',
            'price' => 50.99,
            'image' => 'Boot.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Black Timberland',
            'slug' => 'Original boot',
            'description' => 'Original temberland for our original customers. Try this out',
            'price' => 50.99,
            'image' => 'Tembe.jpg',
        ]);
    }
}