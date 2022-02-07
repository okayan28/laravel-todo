<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssigneesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'kurokawa'
        ];
        DB::table('assignees')->insert($param);

        $param = [
            'name' => 'okada'
        ];
        DB::table('assignees')->insert($param);

        $param = [
            'name' => 'kobako'
        ];
        DB::table('assignees')->insert($param);
    }
}
