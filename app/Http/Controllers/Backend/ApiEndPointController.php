<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Khoj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiEndPointController extends Controller
{
    public function index(){
        $endpoints = Khoj::where('user_id', Auth::user()->id)->get();
        // return $endpoints;exit();
        return view('backend.modules.apiEndPoint.index', compact('endpoints'));
    }
}
