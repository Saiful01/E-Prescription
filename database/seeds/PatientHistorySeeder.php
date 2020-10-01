<?php

use Illuminate\Database\Seeder;

class PatientHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PatientHistory::create([
            'history_title'=>'DM,HTN,CKD,IHD,Asthama'
        ]);
        \App\PatientHistory::create([
            'history_title'=>'Computer User'
        ]);
        \App\PatientHistory::create([
            'history_title'=>'MotorCycle User'
        ]);
    }
}
