<?php

use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Patient::create([
            'patient_name'=>'Aman',
            'patient_age'=>25,
            'patient_blood_group'=>'O+',
            'patient_phone_no'=>'017761075',
            'gender'=>'male'
        ]);
        \App\Patient::create([
            'patient_name'=>'Rafiq',
            'patient_age'=>45,
            'patient_blood_group'=>'A+',
            'patient_phone_no'=>'017761175',
            'gender'=>'male'
        ]);
        \App\Patient::create([
            'patient_name'=>'Asif',
            'patient_age'=>15,
            'patient_blood_group'=>'O+',
            'patient_phone_no'=>'017751075',
            'gender'=>'male'
        ]);
        \App\Patient::create([
            'patient_name'=>'Resma',
            'patient_age'=>35,
            'patient_blood_group'=>'O+',
            'patient_phone_no'=>'017451075',
            'gender'=>'female'
        ]);
        \App\Patient::create([
            'patient_name'=>'Akd',
            'patient_age'=>25,
            'patient_blood_group'=>'O+',
            'patient_phone_no'=>'017762075',
            'gender'=>'male'
        ]);
    }
}
