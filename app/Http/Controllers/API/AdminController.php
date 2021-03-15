<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->user()->is_admin == 1) {
            return response()->json(
                [
                    'message' => 'ini admin',
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'message' => 'bukan admin',
                ],
                200
            );
        }
    }
}
