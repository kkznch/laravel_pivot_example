<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'ロール１'],
            ['name' => 'ロール２'],
            ['name' => 'ロール３'],
        ];

        foreach ($data as $item) {
            Role::forceCreate($item);
        }
    }

}
