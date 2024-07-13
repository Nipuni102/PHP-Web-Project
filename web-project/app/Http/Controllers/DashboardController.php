<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function stdashview(){
        return view (view:'screens.studentdashboard');
    }

    public function sfdashview(){
        return view (view:'screens.staffdashboard');
    }
}
