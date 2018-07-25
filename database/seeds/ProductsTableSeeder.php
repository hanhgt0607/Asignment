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
        //
        DB::table('products')->delete();
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'Chó lai',
                'description'=>'Chỉ có thể là chó',
                'price'=>2000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2tN1iWyRgek2VHosZW4UIte5oJCAwsbJW67joH8Vs79nEZ5KzKQ',
            ],
            [
                'id'=>2,
                'name'=>'Chó ta',
                'description'=>'Chỉ có thể là chó',
                'price'=>2600,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGkGSv1kbIw2HIDvsQRQMVW-EaUYIV1upu5A2WAEw_TjdD7vCV',
            ],
            [
                'id'=>3,
                'name'=>'Chó',
                'description'=>'Chỉ có thể là chó',
                'price'=>2500,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1f4pejeDFZoCej0kOZQ2vt-dKBZhVtgm92ttVgSB4au-CiAuK',
            ],
            [
                'id'=>4,
                'name'=>'Chó lai nhật',
                'description'=>'Chỉ có thể là chó',
                'price'=>2000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGkGSv1kbIw2HIDvsQRQMVW-EaUYIV1upu5A2WAEw_TjdD7vCV',
            ],
            [
                'id'=>5,
                'name'=>'Chó lai',
                'description'=>'Chỉ có thể là chó',
                'price'=>2000,
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6PtthNJD8eVJM2gETqg0s7LULpp-whw_0BqKbML1pyDtov3Kq',
            ],
            [
                'id'=>6,
                'name'=>'Chó',
                'description'=>'Chỉ có thể là chó',
                'price'=>2000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6PtthNJD8eVJM2gETqg0s7LULpp-whw_0BqKbML1pyDtov3Kq',
            ],
            [
                'id'=>7,
                'name'=>'Chó',
                'description'=>'Chỉ có thể là chó',
                'price'=>2600,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2tN1iWyRgek2VHosZW4UIte5oJCAwsbJW67joH8Vs79nEZ5KzKQ',
            ],
            [
                'id'=>8,
                'name'=>'Cho lai nhật',
                'description'=>'Chỉ có thể là chó',
                'price'=>2500,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8oJ1fSGtz6PjAFUHfTU2OujtmE8msWP7z5y1WxH8xeB1s6X9C',
            ],
            [
                'id'=>9,
                'name'=>'Chó giống',
                'description'=>'Chỉ có thể là chó',
                'price'=>2000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8oJ1fSGtz6PjAFUHfTU2OujtmE8msWP7z5y1WxH8xeB1s6X9C',
            ],
            [
                'id'=>10,
                'name'=>'Chó',
                'description'=>'Chỉ có thể là chó',
                'price'=>2000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdZGWMi4e3i9gvBhyHBcCUEPYc9oj0LdSqMCGK4J_D94e9pWlD',
            ],
            [
                'id'=>11,
                'name'=>'Chó nhà',
                'description'=>'Chỉ có thể là chó',
                'price'=>2000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTs1ZqNuPL4zzOHnMYVs6_bm3s6mrivZNXeSSJITkhpRcixq41GQg',
            ],
            [
                'id'=>12,
                'name'=>'Chó nhà',
                'description'=>'Chỉ có thể là chó',
                'price'=>2600,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQORkMWELh8oXbreh6tGrb8rU7YkgR0OEuqEg6ONHGfXUEsCTXa',
            ],
            [
                'id'=>13,
                'name'=>'Chó rừng',
                'description'=>'Chỉ có thể là chó',
                'price'=>2500,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT4SrsbwWZh6L48de5irQziYQ6VEmHKY3O-zWV5hwRssQWH9xD',
            ],
            [
                'id'=>14,
                'name'=>'Chó tàu',
                'description'=>'Chỉ có thể là chó',
                'price'=>2000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBkVG4FNcrzhK5QH3NoEtIGoTibktSlT6pEkaTM6anhHP_nggV',
            ],
            [
                'id'=>15,
                'name'=>'Chó lai mỹ',
                'description'=>'Chỉ có thể là chó',
                'price'=>2000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqiwIH0ZZ9NIawjuMv6Kwo1jpGFE8G-nbOrMCQ2B5Miw02AVPC',
            ],
            [
                'id'=>16,
                'name'=>'Chó lai nhật',
                'description'=>'Chỉ có thể là chó',
                'price'=>2000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpXqeiz-OtLzEQmI_Lz-ejj6jORpdqwq3A9vHnd2_4XYRYn394',
            ],
            [
                'id'=>17,
                'name'=>'Chó mẹ',
                'description'=>'Chỉ có thể là chó',
                'price'=>2600,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjHiE7LqToA-XrFhfIj_tqdTGaY3ngzVrvs94NPdpbNvDNQZVS',
            ],
            [
                'id'=>18,
                'name'=>'Chó con',
                'description'=>'Chỉ có thể là chó',
                'price'=>2500,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjHiE7LqToA-XrFhfIj_tqdTGaY3ngzVrvs94NPdpbNvDNQZVS',
            ],
            [
                'id'=>19,
                'name'=>'Chó tây tạng',
                'description'=>'Chỉ có thể là chó',
                'price'=>2000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjHiE7LqToA-XrFhfIj_tqdTGaY3ngzVrvs94NPdpbNvDNQZVS',
            ],
            [
                'id'=>20,
                'name'=>'Chó ta',
                'description'=>'Chỉ có thể là chó',
                'price'=>2000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjHiE7LqToA-XrFhfIj_tqdTGaY3ngzVrvs94NPdpbNvDNQZVS',
            ],

        ]);


    }
}
