<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $insert = new User;
        $insert->name = 'Administrator';
        $insert->email = 'admin@email.com';
        $insert->password = bcrypt('123');
        // $insert->level = 1;
        $insert->save();
    }
}
