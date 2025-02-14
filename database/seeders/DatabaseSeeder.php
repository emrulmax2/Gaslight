<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->callIfNotSeeded(UserSeeder::class);
        $this->callIfNotSeeded(OptionSeeder::class);
    }

    /**
     * Call the given seeder class if data has not been seeded.
     *
     * @param string $class
     * @return void
     */
    public function callIfNotSeeded($class)
    {
        // Extract the class name
        $className = (new \ReflectionClass($class))->getShortName();

        // Check if the data has already been seeded
        $seeded = DB::table('seeders')->where('seeder', $className)->exists();

        if (!$seeded) {
            // Call the seeder
            parent::call($class);

            // Mark the seeder as run
            DB::table('seeders')->insert(['seeder' => $className]);
        }
    }
}
