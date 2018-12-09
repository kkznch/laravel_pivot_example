<?php

use App\Group;
use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'グループ１'],
            ['name' => 'グループ２'],
            ['name' => 'グループ３'],
        ];

        foreach ($data as $item) {
            Group::forceCreate($item);
        }
    }
}
