<?php

use Illuminate\Database\Seeder;
use App\Role;
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
        $role_user = Role::where('name', 'Usuario')->first();
        $role_vendor = Role::where('name', 'Vendedor')->first();
        $role_admin = Role::where('name', 'Administrador')->first();

        $user = new User();
        $user->fullname = 'Macasoft';
        $user->email = 'admin@macasoft.com';
        $user->password = bcrypt('secret');
        $user->photo = 'https://bit.ly/2ClMVLws';
        $user->roles()->attach($role_user);
    }
}
