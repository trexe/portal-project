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
        DB::table('users')->insert([
            'first_name_lang_key'       => 'user-first-name_1',
            'last_name_lang_key'        => 'user-last-name_1',
            'email'                     => 'cryptovest-new@admin.loc',
            'url'                       => 'admin-main',
            'password'                  => bcrypt('newAdmin'),
            'is_active'                 => 1,
            'is_admin'                  => 1,
        ]);
    }
}
