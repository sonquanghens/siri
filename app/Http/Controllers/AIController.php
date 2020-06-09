<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Carbon;
use App\Ai;

class AIController extends BaseController
{
    
    public function getData()
    {
        $request = request()->data;
        $data = Ai::where('ai_request','like', $request)->first();
        if ($data) {
            return $data->ai_response;
        } elseif (strpos($request, 'today') !== false) {
            return Carbon::now()->isoFormat('dddd, MMMM Do YYYY');
        }
        else {
            return 'i do not undersand';
        }
    }
}
