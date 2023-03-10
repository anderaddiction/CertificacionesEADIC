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
        $this->call(RoleSeeder::class);
        $this->call(CateogrySeeder::class);
        $this->call(MasterSeeder::class);
        $this->call(ConceptStateSeeder::class);
        $this->call(DiplomaStateSeeder::class);
        $this->call(CertificateStateSeeder::class);
        $this->call(UniversitySeeder::class);
    }
}
