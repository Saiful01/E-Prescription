<?php

use Illuminate\Database\Seeder;

class InvestigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Investigation::create([
           'investigation_title'=>'X-ray L/S'
       ]);
        \App\Investigation::create([
            'investigation_title'=>'X-ray C/S'
        ]);
        \App\Investigation::create([
            'investigation_title'=>'X-ray Shoulder'
        ]);
        \App\Investigation::create([
            'investigation_title'=>'M.R.I Cervical Spine'
        ]);
        \App\Investigation::create([
            'investigation_title'=>'M.R.I USG'
        ]);
    }
}
