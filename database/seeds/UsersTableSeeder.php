<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::where('email', 'roydon.decastro@gmail.com')->first();

        if(!$user)
        {
            User::create([
                'name' => 'Roydon Seeder',
                'email' => 'roydon.decastro@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => Hash::make('password')
            ]);
        }
    }
}
