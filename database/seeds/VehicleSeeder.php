<?php

use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehicle::create([
            'plate' => 'AXERT',
            'color' => 'Blanco',
            'brand' => 'Toyota',
            'type_vehicle' => 'Camioneta',
            'owner_id' => 1,
            'driver_id' => 1,
        ]);

        Vehicle::create([
            'plate' => 'AXYIT',
            'color' => 'Azul',
            'brand' => 'Mazda',
            'type_vehicle' => 'Automóvil',
            'owner_id' => 1,
            'driver_id' => 2,
        ]);
        
        Vehicle::create([
            'plate' => 'PGERI',
            'color' => 'Negro',
            'brand' => 'Toyota',
            'type_vehicle' => 'Camioneta',
            'owner_id' => 2,
            'driver_id' => 3,
        ]);
    }
}
