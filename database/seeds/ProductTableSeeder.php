<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Products([
            'ProductName' => 'Garnet',
            'ProductPrice' => '20',
            'ProductWeight' => '.5 ct',
            'ProductCartDesc' => '.5 ct Garnet',
            'ProductShortDesc' => 'Beautiful .5 ct Garnet from Tasmania',
            'ProductLongDesc' => 'This gorgeous Garnet comes all the way from Tasmania and weighs in at a hefty .5 carets',
            'ProductThumb' => 'https://cdn.leibish.com/media/mediabank/pyrope-garnet-gem-info.jpg',
            'ProductImage' => 'https://gittelsonjewelers.com/wp-content/uploads/2015/12/FullSizeRender-2-300x269.jpg',
            'ProductCategoryID' => '01',
            'ProductStock' => '5'
        ]);
        $product->save();

        $product = new \App\Products([
            'ProductName' => 'Beryl',
            'ProductPrice' => '30',
            'ProductWeight' => '.2 ct',
            'ProductCartDesc' => '.2 ct Beryl',
            'ProductShortDesc' => 'Beautiful .2 ct Garnet from Australia',
            'ProductLongDesc' => 'This gorgeous Beryl comes all the way from Australia and weighs in at a hefty .2 carets',
            'ProductThumb' => 'https://crystalsymmetry.files.wordpress.com/2016/07/beryl-quartz-emerald-zambia-33mm_0885.jpg?w=625&h=758',
            'ProductImage' => 'http://crystal-information.com/wp-content/uploads/2015/08/emerald-1920x1080-1.jpg',
            'ProductCategoryID' => '02',
            'ProductStock' => '10'
        ]);
        $product->save();

        $product = new \App\Products([
            'ProductName' => 'Pedinera Tourmaline',
            'ProductPrice' => '15',
            'ProductWeight' => '8.69g',
            'ProductCartDesc' => '8.69g Pedinera Tourmaline',
            'ProductShortDesc' => 'Beautiful 8.69g Pedinera Tourmaline from Australia',
            'ProductLongDesc' => 'This gorgeous Pedinera Tourmaline comes all the way from Australia and weighs in at a hefty .2 carets',
            'ProductThumb' => 'https://scontent-atl3-1.cdninstagram.com/vp/48ba730d8313c99c159ea19ed3ed9d13/5B7597AE/t51.2885-15/e35/14052284_1781129208836152_42266550_n.jpg',
            'ProductImage' => 'https://scontent-atl3-1.cdninstagram.com/vp/48ba730d8313c99c159ea19ed3ed9d13/5B7597AE/t51.2885-15/e35/14052284_1781129208836152_42266550_n.jpg',
            'ProductCategoryID' => '02',
            'ProductStock' => '10'
        ]);
        $product->save();

        $product = new \App\Products([
            'ProductName' => 'Nepalese Tourmaline',
            'ProductPrice' => '45',
            'ProductWeight' => '6.52g',
            'ProductCartDesc' => '6.52g Nepalese Tourmaline',
            'ProductShortDesc' => 'Beautiful 6.52g Nepalese Tourmaline from Australia',
            'ProductLongDesc' => 'This gorgeous Nepalese Tourmaline comes all the way from Australia and weighs in at a hefty .2 carets',
            'ProductThumb' => 'https://cdn.shopify.com/s/files/1/1138/3014/products/image_f5ea830b-89df-46cf-8130-288f1f9431d4_1024x1024.jpeg?v=1485916944',
            'ProductImage' => 'https://cdn.shopify.com/s/files/1/1138/3014/products/image_f5ea830b-89df-46cf-8130-288f1f9431d4_1024x1024.jpeg?v=1485916944',
            'ProductCategoryID' => '02',
            'ProductStock' => '10'
        ]);
        $product->save();

        $product = new \App\Products([
            'ProductName' => 'Beryl',
            'ProductPrice' => '30',
            'ProductWeight' => '.2 ct',
            'ProductCartDesc' => '.2 ct Beryl',
            'ProductShortDesc' => 'Beautiful .2 ct Garnet from Australia',
            'ProductLongDesc' => 'This gorgeous Beryl comes all the way from Australia and weighs in at a hefty .2 carets',
            'ProductThumb' => 'https://crystalsymmetry.files.wordpress.com/2016/07/beryl-quartz-emerald-zambia-33mm_0885.jpg?w=625&h=758',
            'ProductImage' => 'http://crystal-information.com/wp-content/uploads/2015/08/emerald-1920x1080-1.jpg',
            'ProductCategoryID' => '02',
            'ProductStock' => '10'
        ]);
        $product->save();

        $product = new \App\Products([
            'ProductName' => 'Beryl',
            'ProductPrice' => '30',
            'ProductWeight' => '.2 ct',
            'ProductCartDesc' => '.2 ct Beryl',
            'ProductShortDesc' => 'Beautiful .2 ct Garnet from Australia',
            'ProductLongDesc' => 'This gorgeous Beryl comes all the way from Australia and weighs in at a hefty .2 carets',
            'ProductThumb' => 'https://crystalsymmetry.files.wordpress.com/2016/07/beryl-quartz-emerald-zambia-33mm_0885.jpg?w=625&h=758',
            'ProductImage' => 'http://crystal-information.com/wp-content/uploads/2015/08/emerald-1920x1080-1.jpg',
            'ProductCategoryID' => '02',
            'ProductStock' => '10'
        ]);
        $product->save();

        $product = new \App\Products([
            'ProductName' => 'Beryl',
            'ProductPrice' => '30',
            'ProductWeight' => '.2 ct',
            'ProductCartDesc' => '.2 ct Beryl',
            'ProductShortDesc' => 'Beautiful .2 ct Garnet from Australia',
            'ProductLongDesc' => 'This gorgeous Beryl comes all the way from Australia and weighs in at a hefty .2 carets',
            'ProductThumb' => 'https://crystalsymmetry.files.wordpress.com/2016/07/beryl-quartz-emerald-zambia-33mm_0885.jpg?w=625&h=758',
            'ProductImage' => 'http://crystal-information.com/wp-content/uploads/2015/08/emerald-1920x1080-1.jpg',
            'ProductCategoryID' => '02',
            'ProductStock' => '10'
        ]);
        $product->save();

    }
}
