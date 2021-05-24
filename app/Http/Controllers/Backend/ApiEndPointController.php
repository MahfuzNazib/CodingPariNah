<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Khoj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiEndPointController extends Controller
{
    public function index(){
        $endpoints = Khoj::with('user')->where('user_id', Auth::user()->id)->get();
        return view('backend.modules.apiEndPoint.index', compact('endpoints'));
    }

    // View Data in JSON Format
    public function jsonFormat(){
        $endpoints = Khoj::where('user_id', Auth::user()->id)->get();
        return response()->json([
            "status" => "success",
            "user_id" => Auth::user()->id,
            "payload" => [
                'timestamp' => $endpoints[0]->created_at,
                'values' => $endpoints[0]->values
            ]
        ]);
    }
}
