<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        try{
            Subscribe::create([
                'email' => $request->subscribeEmail,
            ]);
        }
        catch (\Exception $e) {
            return response()->json(['error' => 'exist'], 200);
        }
        return true;
    }
}
