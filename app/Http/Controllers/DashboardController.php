<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $page_name = "Dashboard";
        $total_click = DB::table('request_hit_log')->where('cp_id','=',28)->count();
        $todays_click = DB::table('request_hit_log')->where('cp_id','=',28)->whereDay('date_time', '=', date('d'))->count();
        return view('dashboard',compact('page_name','total_click','todays_click'));
    }
}
