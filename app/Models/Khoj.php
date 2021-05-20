<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khoj extends Model
{
    use HasFactory;
    protected $fillable = ['values', 'user_id'];

    // Store input values in json format into DB;
    protected $casts = [
        'values' => 'json'
    ];

    // Store function to insert Value in DB
    public static function createKhojValues($requestData){
        try{
            $id = static::create($requestData);
            return $id;
        }catch(\Exception $e){
            throw new \Exception($e->getMessage(), 1);               
        }
    }
}
