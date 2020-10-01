<?php

use Illuminate\Database\Seeder;

class PatientTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PatientTest::create([
            'patient_test_name'=>'CBCfVacuette(ESR)',
            'patient_test_cost'=>500
        ]);
        \App\PatientTest::create([
            'patient_test_name'=>'Random Blood Sugar (N-V)',
            'patient_test_cost'=>250
        ]);
        \App\PatientTest::create([
            'patient_test_name'=>' FaSting Blood Sugar (N.+.11)',
            'patient_test_cost'=>250
        ]);
        \App\PatientTest::create([
            'patient_test_name'=>'Serology/Immunology Blood Grouping',
            'patient_test_cost'=>220
        ]);
        \App\PatientTest::create([
            'patient_test_name'=>'Serum IAA',
            'patient_test_cost'=>1100
        ]);
    }
}
