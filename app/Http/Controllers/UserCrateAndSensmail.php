<?php

namespace App\Http\Controllers;

use App\Event\UserCreated;
use Illuminate\Http\Request;

class UserCrateAndSensmail extends Controller
{
    //
    function index(){
        event(new UserCreated("your Acpount Has been created"));
    }
}
