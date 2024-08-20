<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData =[
            [
                'name'=>'kang atmin',
                'uid'=>'123',
                'role'=>'admin',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'kang maha',
                'uid'=>'111',
                'role'=>'mahasiswa',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'kang dosen',
                'uid'=>'222',
                'role'=>'dosen',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'kang univ',
                'uid'=>'333',
                'role'=>'univ',
                'password'=>bcrypt('123456')
            ],

        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
