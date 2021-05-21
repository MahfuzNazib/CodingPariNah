<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function registration(Request $request){
        if($request->isMethod('post')){
            // Server side Validation
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'phone' => 'required|max:11|min:11',
                'password' => 'required|min:6|confirmed',
            ]);

            if($validator->fails()){
                return response()->json(['errors' => $validator->errors()], 422);
            }else{
                try{
                    $data = $request->all();
                    $data['role_id'] = 1;
                    $data['password'] = Hash::make($request->password);
                    $register = User::createNewUser($data);
    
                    if($register){
                        return response()->json(['success' => 'Account Successfully Created'],200);
                    }
                }catch(Exception $e){
                    return response()->json(['error' => $e->getMessage()], 200);
                }
            }
        }else{
            return view('auth.register');
        }
    }
}
