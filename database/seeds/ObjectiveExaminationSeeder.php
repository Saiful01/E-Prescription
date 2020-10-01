<?php

use Illuminate\Database\Seeder;

class ObjectiveExaminationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ObjectiveExamination::create([
            'objective_examination_title'=>'Swelling'
        ]);
        \App\ObjectiveExamination::create([
            'objective_examination_title'=>'Tenderness'
        ]);
        \App\ObjectiveExamination::create([
            'objective_examination_title'=>'MS tone/fluid'
        ]);
        \App\ObjectiveExamination::create([
            'objective_examination_title'=>'Sensory Impairment'
        ]);
        \App\ObjectiveExamination::create([
            'objective_examination_title'=>'Motor Deficit'
        ]);
    }
}
