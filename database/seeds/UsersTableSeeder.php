<?php

use App\User;
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
        $data = [
            ['name' => 'ユーザーさん'],
        ];

        foreach ($data as $item) {
            User::forceCreate($item);
        }
    }
}
