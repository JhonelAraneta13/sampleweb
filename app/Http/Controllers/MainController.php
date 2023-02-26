<?php

namespace App\Http\Controllers;

use App\Models\MyInfo;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function SendData()
    {
        return view('section.body',['data'=>MyInfo::datas()]);
    }
}
