<?php

use App\Models\Owner;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Owner::create([
            'dni_id' => 108753641,
            'first_name' => 'Pedro',
            'middle_name' => 'Manuel',
            'surnames' => 'García Díaz',
            'address' => 'Cra 23 # 34 - 56',
            'phone_number' => '30124569874',
            'city' => 'Bogotá',
        ]);

        Owner::create([
            'dni_id' => 108732448,
            'first_name' => 'Marcos',
            'middle_name' => 'Alberto',
            'surnames' => 'Rodríguez Camargo',
            'address' => 'Cra 100 # 76 - 58',
            'phone_number' => '30124561597',
            'city' => 'Bogotá',
        ]);

        Owner::create([
            'dni_id' => 8578458,
            'first_name' => 'Ricardo',
            'middle_name' => 'Armando',
            'surnames' => 'Rodríguez Castillo',
            'address' => 'Cra 16b # 35 - 22',
            'phone_number' => '31394568961',
            'city' => 'Bogotá',
        ]);

        Owner::create([
            'dni_id' => 108732448,
            'first_name' => 'Sebastián',
            'middle_name' => 'Andrés',
            'surnames' => 'Huérfano Rodríguez',
            'address' => 'Cra 100a # 89 - 12',
            'phone_number' => '31084563256',
            'city' => 'Bogotá',
        ]);

        Owner::create([
            'dni_id' => 108732448,
            'first_name' => 'Santiago',
            'middle_name' => 'Alfredo',
            'surnames' => 'Mantilla Pelaez',
            'address' => 'Cra 69c # 30 - 10',
            'phone_number' => '31562895461',
            'city' => 'Bogotá',
        ]);
    }
}
