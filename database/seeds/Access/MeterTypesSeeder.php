<?php

use App\MeterType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeterTypesSeeder extends Seeder
{
    public function run() {

        if(env('DB_DRIVER') == 'mysql')
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        if(env('DB_DRIVER') == 'mysql')
            DB::table('meter_types')->truncate();
        elseif(env('DB_DRIVER') == 'sqlite')
            DB::statement("DELETE FROM meter_types");
        else //For PostgreSQL or anything else
            DB::statement("TRUNCATE TABLE meter_types CASCADE");

        //Heating
        $meterType = new MeterType;
        $meterType->code = 'heating';
        $meterType->unit = 'mwt';
        $meterType->save();

        //Cold water
        $meterType = new MeterType;
        $meterType->code = 'cold_water';
        $meterType->unit = 'm3';
        $meterType->save();

        //Hot water
        $meterType = new MeterType;
        $meterType->code = 'hot_water';
        $meterType->unit = 'm3';
        $meterType->save();

        //Gas
        $meterType = new MeterType;
        $meterType->code = 'gas';
        $meterType->unit = 'm3';
        $meterType->save();

        //Electricity
        $meterType = new MeterType;
        $meterType->code = 'electricity';
        $meterType->unit = 'kwt';
        $meterType->save();


        if(env('DB_DRIVER') == 'mysql')
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
