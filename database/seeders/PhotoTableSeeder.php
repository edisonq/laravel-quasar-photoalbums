<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/photos.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            DB::table('photos')->insert([
                'albumid' => $obj->albumId,
                'title' => $obj->title,
                'url' => $obj->url,
                'thumbnailUrl' => $obj->thumbnailUrl,
            ]);
        }
    }
}
