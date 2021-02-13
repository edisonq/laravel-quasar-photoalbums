<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->delete();
        $json = File::get("database/data/user.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            DB::table('users')->insert([
                'name' => $obj->name,
                'username' => $obj->username,
                'password' => Hash::make('gwapo'),
                'email' => $obj->email,
                'address' => json_encode($obj->address),
                'phone' => $obj->phone,
                "website" => $obj->website,
                'company' => json_encode($obj->company)
            ]);
        }
    }
}
