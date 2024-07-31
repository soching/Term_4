<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();
    }
        //
    //     $users = [
    //         ['name' => 'Ching','email'=>'ching@gmail.com', 'password'=>103 ],
    //         ['name' => 'Chen','email'=>'chen@gmail.com', 'password'=>1233 ],
    //         ['name' => 'Chhaiya','email'=>'chhaiya@gmail.com', 'password'=>1923 ],
    //     ];
    //     foreach ($users as $user) {
    //         User::create($user);
    //     }
    // }
}
