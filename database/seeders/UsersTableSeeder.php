<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
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
        //
        // User::truncate();
        // DB::table('role_user')->truncate();

        $moderatorRole = Role::where('name','moderator')->first();
        $superAdminRole = Role::where('name','super_admin')->first();
        $adminRole = Role::where('name','admin')->first();
        $userRole = Role::where('name','user')->first();



        $moderatorAdmin =User::create([
            'name' => 'John Modulus',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1233'),
            'location' => 'USA',
            'is_active' => 1,
            'verified' => 1,
            'gender' => 'Male',
            'age' => '25',
            'user_type' => 'moderator'
        ]);

        $superAdmin =User::create([
            'name' => 'Super Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123'),
            'location' => 'USA',
            'is_active' => 1,
            'verified' => 1,
            'gender' => 'Male',
            'age' => '25',
            'user_type' => 'super_admin'
        ]);
        $admin = User::create([
            'name'      => 'Admin',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('admin'),
            'location' => 'USA',
            'gender' => 'Male',
            'age' => '25',
            'is_active' => 1,
            'verified' => 1,
            'user_type' => 'admin'
        ]);

        $user = User::create([
            'name'      => 'User',
            'email'     => 'user@user.com',
            'password'  => Hash::make('user'),
            'location' => 'USA',
            'gender' => 'Male',
            'age' => '25',
            'is_active' => 1,
            'verified' => 1,
            'user_type' => 'business_user'
        ]);

        $moderatorAdmin->roles()->attach($moderatorRole);
        $superAdmin->roles()->attach($superAdminRole);
        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
    
    }
}
