<?php

namespace Database\Seeders;

use App\Models\v1\User;
use Illuminate\Database\Seeder;

class UserDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userModel = new User();
        $userModel->name = 'default';
        $userModel->email = 'default@app.com';
        $userModel->password = bcrypt('1234');
        $userModel->save();
    }
}
