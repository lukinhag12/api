<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'first_name' => 'Lucas',
            'last_name'  => 'Santos',
            'email'      => 'lucas@teste.com',
            'password'   => bcrypt('teste123')
        ]);

        factory(User::class, 5)->create();
    }
}
