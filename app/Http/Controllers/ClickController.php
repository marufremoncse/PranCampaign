<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClickController extends Controller
{
    public function click_details(Request $request){
        $keyword_of_searching = isset($request->keyword)? $request->keyword : null;
        $items = 100;
        if (isset($keyword_of_searching) && $keyword_of_searching != null) {
            $page_name = "Search List";
            $q = $request->keyword;
            $keyword_of_searching = $request->keyword;
            if ($q != null) {
                $data = DB::table('request_hit_log')->select('ip', 'user_agent','model_num','operator','msisdn','date_time')
                    ->where('cp_id','=',28)
                    ->where(function ($data) use ($q) {
                        $data->where('ip', 'LIKE', '%' . $q . '%')
                            ->orWhere('user_agent', 'LIKE', '%' . $q . '%')
                            ->orWhere('model_num', 'LIKE', '%' . $q . '%')
                            ->orWhere('msisdn', 'LIKE', '%' . $q . '%');
                    })
                    ->orderBy('date_time','desc')
                    ->paginate($items)->appends('keyword', $keyword_of_searching)->appends('items',$items);
                return view('click_details', compact('data', 'page_name', 'keyword_of_searching','items'));
            }
        }
        else{
            $page_name = "Click List";
            $data = DB::table('request_hit_log')->select('ip', 'user_agent','model_num','operator','msisdn','date_time')
                ->where('cp_id','=',28)->orderBy('date_time','desc')->paginate($items);
            return view('click_details',compact('page_name','data','items'));
        }
    }

    public function day_wise_click(){
        $items = 100;
        $page_name = 'Day Wise Click History';
        $data = DB::table('request_hit_log')->select(DB::raw('DATE(date_time) as date'),DB::raw('count(*) as count'))
                    ->where('cp_id','=',28)->groupBy('date')->orderBy('date','desc')
                    ->paginate($items);
        return view('day_wise_click',compact('page_name','data','items'));
    }

    public function day_wise_click_details(Request $request,$date){
        $keyword_of_searching = isset($request->keyword)? $request->keyword : null;
        $items = 100;
        if (isset($keyword_of_searching) && $keyword_of_searching != null) {
            $page_name = "Search List";
            $q = $request->keyword;
            $keyword_of_searching = $request->keyword;
            if ($q != null) {
                $data = DB::table('request_hit_log')->select('ip', 'user_agent','model_num','operator','msisdn','date_time')
                    ->where('cp_id','=',28)
                    ->where('date_time','like',$date.'%')
                    ->where(function ($data) use ($q) {
                        $data->where('ip', 'LIKE', '%' . $q . '%')
                            ->orWhere('user_agent', 'LIKE', '%' . $q . '%')
                            ->orWhere('model_num', 'LIKE', '%' . $q . '%')
                            ->orWhere('msisdn', 'LIKE', '%' . $q . '%');
                    })
                    ->orderBy('date_time','desc')
                    ->paginate($items)->appends('keyword', $keyword_of_searching)->appends('items',$items);
                    return view('click_details', compact('data', 'page_name', 'keyword_of_searching','items'));
            }
        }
        $page_name = "Click History of ". date('d-M-Y', strtotime($date));
        $data = DB::table('request_hit_log')->select('ip', 'user_agent','model_num','operator','msisdn','date_time')
        ->where('cp_id','=',28)->where('date_time','like',$date.'%')->orderBy('date_time','desc')->paginate($items);
        return view('click_details',compact('page_name','data','items'));
    }
}
