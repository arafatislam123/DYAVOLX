<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productsData = [
            [
                'name' => 'The Masterpiece | Signature Suede Jacket',
                'price' => 175555.00,
                'images' => [
                    'https://dyavolx.com/cdn/shop/files/2010-2620.jpg?v=1735214049&width=1080',
                    'https://dyavolx.com/cdn/shop/files/Signature-jacket-1242-1170.jpg?v=1735214465&width=1080',
                    'https://dyavolx.com/cdn/shop/files/1260-2610.jpg?v=1735214093&width=1080',
                    'https://dyavolx.com/cdn/shop/files/Signature-jacket-1242-690.jpg?v=1735214540&width=1080',
                    'https://dyavolx.com/cdn/shop/files/990-1575.jpg?v=1735214137&width=900',
                    'https://dyavolx.com/cdn/shop/files/Signature-Jacket--495-825.jpg?v=1735214858&width=360',
                    'https://dyavolx.com/cdn/shop/files/990-1005.jpg?v=1735214163&width=900',
                    'https://dyavolx.com/cdn/shop/files/Signature-Jacket-735-825.jpg?v=1735214892&width=540',
                ]
            ],
            [
                'name' => 'Blackout',
                'price' => 41000.00,
                'images' => [
                    'https://dyavolx.com/cdn/shop/files/Blackout-Hoodie_2670x2610_7cc0973e-f6ce-4b87-a605-1d1f9973f6e4.png?v=1735292294&width=2048',
                    'https://dyavolx.com/cdn/shop/files/Blackout-Hoodie-1242-1560.jpg?v=1735215250&width=1080',
                    'https://dyavolx.com/cdn/shop/files/1620-1080.jpg?v=1735215988&width=1512',
                    'https://dyavolx.com/cdn/shop/files/Blackout-Hoodie---615-1140.jpg?v=1735272918&width=540',
                    'https://dyavolx.com/cdn/shop/files/1620-1500.jpg?v=1735216080&width=1512',
                    'https://dyavolx.com/cdn/shop/files/Blackout-Hoodie---615-1140_1.jpg?v=1735272949&width=540',
                ]
            ],
            [
                'name' => 'X Action Cap',
                'price' => 6555.00,
                'images' => [
                    'https://dyavolx.com/cdn/shop/files/2670-2610.jpg?v=1735273350&width=1080',
                    'https://dyavolx.com/cdn/shop/files/X-Action-Cap-1242-1560.jpg?v=1735273071&width=1080',
                    'https://dyavolx.com/cdn/shop/files/1620-1290.jpg?v=1735273380&width=1512',
                    'https://dyavolx.com/cdn/shop/files/X-Action-Cap-615-1140.jpg?v=1735273117&width=540',
                    'https://dyavolx.com/cdn/shop/files/1620-1290_1.jpg?v=1735273410&width=1512',
                    'https://dyavolx.com/cdn/shop/files/X-Action-Cap--615-1140.jpg?v=1735273151&width=540',
                ]
            ],
            [
                'name' => 'The X-Girlfriend',
                'price' => 41000.00,
                'images' => [
                    'https://dyavolx.com/cdn/shop/files/1185-1578.jpg?v=1735273478&width=1080',
                    'https://dyavolx.com/cdn/shop/files/X-GF-735-825.jpg?v=1735273969&width=540',
                    'https://dyavolx.com/cdn/shop/files/1455-2610.jpg?v=1735273516&width=1080',
                    'https://dyavolx.com/cdn/shop/files/X-GF-495-825.jpg?v=1735273939&width=360',
                    'https://dyavolx.com/cdn/shop/files/XGF-1620-1290.jpg?v=1735273644&width=1512',
                    'https://dyavolx.com/cdn/shop/files/X-GF-1242-690.jpg?v=1735273885&width=1080',
                    'https://dyavolx.com/cdn/shop/files/XGF-1620-1290_1.jpg?v=1735273712&width=1512',
                    'https://dyavolx.com/cdn/shop/files/X-GF-Banner-1242-1350.jpg?v=1735273836&width=1080',
                ]
            ],
            [
                'name' => 'Duck II',
                'price' => 21000.00,
                'images' => [
                    'https://dyavolx.com/cdn/shop/files/Duck-II-2670-2610.jpg?v=1735274533&width=1944',
                    'https://dyavolx.com/cdn/shop/files/Duck-T-II-1242-1560.jpg?v=1735274244&width=1080',
                    'https://dyavolx.com/cdn/shop/files/Duckk-II-1620-1290_1.jpg?v=1735274407&width=1944',
                    'https://dyavolx.com/cdn/shop/files/Duck-II-615-1140.jpg?v=1735274433&width=540',
                    'https://dyavolx.com/cdn/shop/files/Duckk-II-1620_1290_2.jpg?v=1735274591&width=1944',
                ]
            ],
            [
                'name' => 'X Cap',
                'price' => 6555.00,
                'images' => [
                    'https://dyavolx.com/cdn/shop/files/X-Cap-2670-2610.jpg?v=1735274663&width=2048',
                    'https://dyavolx.com/cdn/shop/files/X-Cap-1242-1560.jpg?v=1735274821&width=1080',
                    'https://dyavolx.com/cdn/shop/files/X-Cap-1620-1080.jpg?v=1735274710&width=1512',
                    'https://dyavolx.com/cdn/shop/files/X-Cap--615-1140.jpg?v=1735274859&width=540',
                    'https://dyavolx.com/cdn/shop/files/X-Cap-1620-1500.jpg?v=1735274761&width=1512',
                    'https://dyavolx.com/cdn/shop/files/X-Cap-615-1140.jpg?v=1735274885&width=540',
                ]
            ],
            [
                'name' => 'Whiteout',
                'price' => 22500.00,
                'images' => [
                    'https://dyavolx.com/cdn/shop/files/Whiteout-T-2010-2610.jpg?v=1735275495&width=1944',
                    'https://dyavolx.com/cdn/shop/files/Whiteout-735-825.jpg?v=1735275379&width=540',
                    'https://dyavolx.com/cdn/shop/files/Whiteout-T-1260-2610.jpg?v=1735275572&width=1080',
                    'https://dyavolx.com/cdn/shop/files/Whiteout-495-825.jpg?v=1735275418&width=360',
                    'https://dyavolx.com/cdn/shop/files/Whiteout-T-990-1575.jpg?v=1735275603&width=900',
                    'https://dyavolx.com/cdn/shop/files/Whiteout-1242-1170.jpg?v=1735275221&width=1080',
                    'https://dyavolx.com/cdn/shop/files/Whiteout-T---990-1005.jpg?v=1735275637&width=900',
                    'https://dyavolx.com/cdn/shop/files/Whiteout-1242-690.jpg?v=1735275309&width=1080',
                ]
            ],
            [
                'name' => 'Midnight',
                'price' => 22500.00,
                'images' => [
                    'https://dyavolx.com/cdn/shop/files/Midnight-T-2670-2610.jpg?v=1735275710&width=1944',
                    'https://dyavolx.com/cdn/shop/files/Midnight-1242-1560.jpg?v=1735275895&width=1080',
                    'https://dyavolx.com/cdn/shop/files/Midnight-1620-1290.jpg?v=1735275797&width=1512',
                    'https://dyavolx.com/cdn/shop/files/Midnight-615-1140.jpg?v=1735275927&width=540',
                    'https://dyavolx.com/cdn/shop/files/Midnight-1620-1290_1.jpg?v=1735275838&width=1512',
                    'https://dyavolx.com/cdn/shop/files/Midnight-615-1140_1.jpg?v=1735275954&width=540',
                ]
            ],
            [
                'name' => 'Knight Walker II',
                'price' => 35000.00,
                'images' => [
                    'https://dyavolx.com/cdn/shop/files/Knightwalker-II-2010-2610.jpg?v=1735276431&width=1080',
                    'https://dyavolx.com/cdn/shop/files/Knightwalker-II-735-825.jpg?v=1735276345&width=540',
                    'https://dyavolx.com/cdn/shop/files/Knightwalker-II-1260-2610.jpg?v=1735276461&width=1080',
                    'https://dyavolx.com/cdn/shop/files/Knightwalker-II-495-825.jpg?v=1735276306&width=360',
                    'https://dyavolx.com/cdn/shop/files/Knightwalker-II-990-1575.jpg?v=1735276511&width=900',
                    'https://dyavolx.com/cdn/shop/files/Knightwalker-II-Banner-1242-1350.jpg?v=1735276099&width=1080',
                    'https://dyavolx.com/cdn/shop/files/Knightwalker-II-990-1005.jpg?v=1735276536&width=900',
                    'https://dyavolx.com/cdn/shop/files/Knightwalker-II-1242-690.jpget.jpg?v=1735276244&width=1080',
                ]
            ],
        ];

        foreach ($productsData as $data) {
            $product = Product::create([
                'name' => $data['name'],
                'price' => $data['price'],
            ]);

            foreach ($data['images'] as $url) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_url' => $url,
                ]);
            }
        }
    }
}