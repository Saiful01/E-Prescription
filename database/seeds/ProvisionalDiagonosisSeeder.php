<?php

use Illuminate\Database\Seeder;

class ProvisionalDiagonosisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ProvisionalDiagonosis::create([
            'provisional_diagonoses_title'=>'Neck Pain eMS'
        ]);
        \App\ProvisionalDiagonosis::create([
            'provisional_diagonoses_title'=>'Neck Pain Rediatiny'
        ]);
        \App\ProvisionalDiagonosis::create([
            'provisional_diagonoses_title'=>'Acute Wry Neck'
        ]);
        \App\ProvisionalDiagonosis::create([
            'provisional_diagonoses_title'=>'Frozen Shoulder'
        ]);
        \App\ProvisionalDiagonosis::create([
            'provisional_diagonoses_title'=>'Post Fracture'
        ]);
    }
}
