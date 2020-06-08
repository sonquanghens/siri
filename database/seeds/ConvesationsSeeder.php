<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class ConvesationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dump('=====> Start create convesations seeder =====>' . Carbon::now());

        DB::table('conversations')->insert([
            [
                'ai_request' => 'how are you',
                'ai_response' => 'i am so good , you are so kind',
            ],
            [
                'ai_request' => 'hi',
                'ai_response' => 'hello',
            ],
            [
                'ai_request' => 'hello',
                'ai_response' => 'hey bro',
            ],
        ]);
        dump('=====> End create convesations seeder =====>' . Carbon::now());
    }
}
