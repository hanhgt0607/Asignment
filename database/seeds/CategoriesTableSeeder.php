<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('categories')->delete();
        DB::table('categories')->insert([

            [
                'id'=>1,
                'name'=>'Chó nội',
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8axBss0xl08L1_kDvbeWT3pAcRKrY7Wq8cNnaAyzBxxdanNiY',
            ],
            [
                'id'=>2,
                'name'=>'Chó ngoại',
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfyhx8b_lOq5_ahw8XNBhtg-auXGvqYFHtuZzrqKJKOzt0Hmuh',
            ],
            [
                'id'=>3,
                'name'=>'Chó lai',
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0QH-aSsxS9Hl1N5wBDVDMddxuTtJkk9VciFg79KRnjIKH7RRs',
            ],
            [
                'id'=>4,
                'name'=>'Chó ta',
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaK81tZbfLzyey-GwbqO04tqPvQZZ_7tvhQ66Td5Rjnd0Oj8HY',
            ],
            [
                'id'=>5,
                'name'=>'Chó tổng hợp',
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqbO_VLw6n0ShzbwDjRLxe14y7gW9DPOg5aidqOuumfUnwYqtxIg',
            ],

        ]);
    }
}
