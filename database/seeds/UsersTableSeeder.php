<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 19999)->create();
        App\User::create([
            'name' => 'Arturo Ruiz',
            'status' => 'Active',
            'email' => 'gregory09ruiz@gmail.com',
            'password' => bcrypt('123'),
        ]);
    }
}
