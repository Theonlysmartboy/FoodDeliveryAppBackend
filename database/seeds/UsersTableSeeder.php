<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $users = [[
        'id' => 1,
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => '$2y$10$4u72Qv6RiFaqcrr97Ngv2.efii7yHlMtLyDjRigG5NHdRBju7IVdi',
        'remember_token' => null,
        'created_at' => '2019-08-27 13:29:01',
        'updated_at' => '2019-08-27 13:29:01',
        'deleted_at' => null,
        ]];

        User::insert($users);
    }

}
