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
            'name' => 'AdiidasBoots ',
            'slug' => 'os',
            'description' => 'Shop the latest selection of adidas running shoes. New styles and colors available',
            'price' => 39.99,
            'image' => 'sam.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Niike ',
            'slug' => 'smart-nike',
            'description' => 'A great fit for performance and everyday wear, nice look',
            'price' => 44.99,
            'image' => 'tshabz.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Nikkee',
            'slug' => 's-n-s',
            'description' => 'A great fit for performance and everyday wear',
            'price' => 22.99,
            'image' => 'baby.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Kappaa ',
            'slug' => 'k-s',
            'description' => 'Smart thing for smart people',
            'price' => 79.99,
            'image' => 'david.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Kapa ',
            'slug' => 'kappa',
            'description' => 'Smart shoes for smart people',
            'price' => 69.99,
            'image' => 'harmel.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Adidasboot ',
            'slug' => 'adidas',
            'description' => 'Shop the latest selection of adidas running shoes. New styles and colors available at the online store today',
            'price' => 89.99,
            'image' => 'charles.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Nikey ',
            'slug' => 'smart-shoes',
            'description' => 'A great fit for performance and everyday wear.',
            'price' => 99.99,
            'image' => 'ngongo.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'AdidasBoots ',
            'slug' => 'original-adidas-for-smart-people',
            'description' => 'Shop the latest selection of adidas running shoes. New styles and colors available here',
            'price' => 49.99,
            'image' => 'messi.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Temberland ',
            'slug' => 'Boot',
            'description' => 'New for our gag star customers, Temberland Boot',
            'price' => 50.99,
            'image' => 'Boot.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Temberland Boot ',
            'slug' => 'Original boot',
            'description' => 'Original temberland for our original customers. Try this out',
            'price' => 50.99,
            'image' => 'Tembe.jpg',
        ]);
    }
}