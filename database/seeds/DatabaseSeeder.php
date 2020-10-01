<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ChiefComplainSeeder::class);
        $this->call(InvestigationSeeder::class);
        $this->call(ObjectiveExaminationSeeder::class);
        $this->call(PatientHistorySeeder::class);
        $this->call(PatientTestSeeder::class);
        $this->call(ProvisionalDiagonosisSeeder::class);
        $this->call(PatientSeeder::class);
    }
}
