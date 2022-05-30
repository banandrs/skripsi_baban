<?php

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
        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                'name'      => 'member',
                'email'     => 'member@member.com',
                'password'  => bcrypt('member'),
                'no_hp'     => '085750058435',
            ]
        ]);
    }
}
