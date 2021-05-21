<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Khoj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KhojController extends Controller
{
    public function khoj(){
        return view('backend.modules.khoj.khoj');
    }

    public function add(Request $request){
        $data = $request->all();
        $getData = null;

        $val_array = explode(",", $data['values']); // Convert String to Array
        rsort($val_array); //Sort Array as Desending Order
        $length = count($val_array); //Get the Total Length of Array

        $desending_order_value = []; //Deaclear a new array variable
        for($i=0; $i < $length; $i++){
            array_push($desending_order_value, $val_array[$i]); //Push value into new array
        }

        // Check Searching Value
        if(in_array($data['search'], $desending_order_value)){
            $getData = "True";
        }else{
            $getData = "False";
        }

        $data['values'] = $desending_order_value;
        $data['user_id'] = Auth::user()->id;

        $save = Khoj::createKhojValues($data);

        if($getData == "True"){
            return response()->json(['success' => 'Result : True'],200);
        }else{
            return response()->json(['warning' => 'Result : False'],200);
        }
    }
}
