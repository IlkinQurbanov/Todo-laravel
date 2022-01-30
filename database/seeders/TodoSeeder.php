<?php

namespace Database\Seeders;

use Carbon\Factory;
use App\Models\Todo;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      // $this-> factory(App\Todo::class, 10)->create([]);
      Todo::create([
        'name' => 'Hardik',
        'description' => 'ksjjdkldldddl ccccc',
        'completed' => '10',
    ]);
    }
}
