<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        DB::table('admins')->insert([
            [
                'name'      => 'Admin',
                'email'     => 'admin@admin.com',
                'password'  => bcrypt('admin'),
                'phone'     => '085750058435',
                'status'    => '1',
            ],
            [
                'name'      => 'Manager',
                'email'     => 'manager@manager.com',
                'password'  => bcrypt('manager'),
                'phone'     => '085750058435',
                'status'    => '1',
            ]
        ]);
    }
}
