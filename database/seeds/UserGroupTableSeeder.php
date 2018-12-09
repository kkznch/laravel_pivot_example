<?php

use App\UserGroup;
use Illuminate\Database\Seeder;

class UserGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'group_id' => 1,
                'role_id' => 1,
            ],
            [
                'user_id' => 1,
                'group_id' => 2,
                'role_id' => 2,
            ],
            [
                'user_id' => 1,
                'group_id' => 3,
                'role_id' => 3,
            ],
        ];

        foreach ($data as $item) {
            UserGroup::forceCreate($item);
        }
    }
}
