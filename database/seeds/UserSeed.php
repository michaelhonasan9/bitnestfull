<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'username' => null, 'mobile' => null, 'email' => 'admin@admin.com', 'password' => '$2y$10$lxK6oKyq2UgAbkJoOg6mm.yigKzR4VJSx/R.pcknvsZNYmoAmXl4O', 'role_id' => 1, 'remember_token' => '', 'referred_id' => null, 'points' => null,],
            ['id' => 2, 'name' => 'Arjane', 'username' => 'arjane', 'mobile' => '09126324283', 'email' => 'arjanecabansag@gmail.com', 'password' => '$2y$10$dC7osz3lChAPs7d8nCXWAudu5YwTrWKnO9Mf.BRr4LxK92RRU7YBK', 'role_id' => 1, 'remember_token' => null, 'referred_id' => 1, 'points' => 100,],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
