<?php

namespace App\Models;

use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyInfo extends Model
{
    use HasFactory;
    public static function datas(){
        $webpage =[
            'name' => 'My Website',
            'information' => 'Hello People of the Phil',
            'myname' => 'Araneta Jhonel'

        ];
        return $webpage;
    }
}
