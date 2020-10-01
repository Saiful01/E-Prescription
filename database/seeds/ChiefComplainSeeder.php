<?php

use Illuminate\Database\Seeder;

class ChiefComplainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ChiefComplain::create([
            'chief_complain_title'=>'Pain on Neck'
        ]);
        \App\ChiefComplain::create([
            'chief_complain_title'=>'Paresthesia Sensation'
        ]);
        \App\ChiefComplain::create([
            'chief_complain_title'=>'Difficulty in mvt'
        ]);
        \App\ChiefComplain::create([
            'chief_complain_title'=>'Tenderness Present'
        ]);
        \App\ChiefComplain::create([
            'chief_complain_title'=>'Pain on Shoulder'
        ]);
    }
}
