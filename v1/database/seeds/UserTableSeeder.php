<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'SocialVoteTH',
            'email' => 'socialvote@gmail.com',
            'password' => bcrypt('socialvote!'),
        ]);
    }
}