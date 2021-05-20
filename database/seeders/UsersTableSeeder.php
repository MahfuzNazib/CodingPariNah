<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nazib Mahfuz',
            'email' => 'nazib@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'phone' => '01777127618',
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
