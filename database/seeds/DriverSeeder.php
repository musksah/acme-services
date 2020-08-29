<?php

use App\Models\Driver;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Driver::create([
            'dni_id' => 108753641,
            'first_name' => 'Pedro',
            'middle_name' => 'Manuel',
            'surnames' => 'García Díaz',
            'address' => 'Cra 23 # 34 - 56',
            'phone_number' => '30124569874',
            'city' => 'Bogotá',
        ]);

        Driver::create([
            'dni_id' => 108732448,
            'first_name' => 'Marcos',
            'middle_name' => 'Alberto',
            'surnames' => 'Rodríguez Camargo',
            'address' => 'Cra 100 # 76 - 58',
            'phone_number' => '30124561597',
            'city' => 'Bogotá',
        ]);

        Driver::create([
            'dni_id' => 108734235,
            'first_name' => 'Carmen',
            'middle_name' => 'Alicia',
            'surnames' => 'Gonzales Huertas',
            'address' => 'Cra 16b # 35 - 22',
            'phone_number' => '31424568966',
            'city' => 'Bogotá',
        ]);

        Driver::create([
            'dni_id' => 185411448,
            'first_name' => 'Carolina',
            'middle_name' => '',
            'surnames' => 'Montoya Díaz',
            'address' => 'Cra 100a # 89 - 12',
            'phone_number' => '31224563266',
            'city' => 'Bogotá',
        ]);

        Driver::create([
            'dni_id' => 10896538,
            'first_name' => 'Alfredo',
            'middle_name' => 'Alfonso',
            'surnames' => 'Castillo Mora',
            'address' => 'Cra 69c # 30 - 10',
            'phone_number' => '31727895466',
            'city' => 'Bogotá',
        ]);
    }
}
