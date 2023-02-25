<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good
{

    public static function all() {
         return [
            [
                'id'=> 1,
                'name' => 'Trial 1',
                'description' => 'There are many fishes in the river, golden fish is the best. I want you to be my girlfriend, Yes or No, If no, Why?'
            ],
            [
                'id'=> 2,
                'name' => 'Trial 2',
                'description' => 'There are many fishes in the river, golden fish is the best. I want you to be my girlfriend, Yes or No, If no, Why?'
            ],
            [
                'id'=> 3,
                'name' => 'Trial 3',
                'description' => 'There are many fishes in the river, golden fish is the best. I want you to be my girlfriend, Yes or No, If no, Why?'
            ]
            ];
    }

    public static function find($id) {
        
        $Trials = self::all();

        foreach($Trials as $Trial) {
            if($Trial['id'] == $id) {
                return $Trial;
            }
        }
    }
    
    // use HasFactory;
}



