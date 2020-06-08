<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Carbon;

class AIController extends BaseController
{
    
    public function getData()
    {
        $data = request()->data;
        if ($data == 'hi') {
            return 'Hi';
        }elseif ('hello' == $data) {
            return 'Hey Bro';
        }
        elseif (strpos($data, 'today') !== false) {
            return Carbon::now()->isoFormat('dddd, MMMM Do YYYY');
        }
        else {
            return 'Please try again';
        }
    }
}
