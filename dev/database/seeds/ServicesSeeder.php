<?php

use Illuminate\Database\Seeder;
use App\Service;
class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'name'      =>  'Web Developer',
                'price'     =>  300,
                'status'    =>  true,
            ],
            [
                'name'      =>  'Marketing Digital',
                'price'     =>  500,
                'status'    =>  true,
            ],
            [
                'name'      =>  'Graphic Design',
                'price'     =>  240,
                'status'    =>  true,
            ],
            [
                'name'      =>  'Teacher',
                'price'     =>  20,
                'status'    =>  true,
            ]
        ];

        foreach($services as $service){
            Service::create([
                'name'       =>      $service['name'],
                'price'      =>      $service['price'],
                'status'     =>      $service['status']
            ]);
        }
    }
}
