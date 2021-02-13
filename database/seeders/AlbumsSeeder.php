<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/albums.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            DB::table('albums')->insert([
                'userId' => $obj->userId,
                'title' => $obj->title,
            ]);
        }
    }
}
