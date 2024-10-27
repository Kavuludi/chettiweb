<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnlineApplication;
use DB;
class Dashboard extends Controller
{
    public function index(){

        $count_applicants =  OnlineApplication::count();

        $data = DB::table('online_applications')
        ->select(
           DB::raw('selection2 as selection2'),
           DB::raw('count(*) as number'))
          ->groupBy('selection2')
           ->get();
      
        $array[] = ['selection2', 'Number'];
        foreach($data as $key => $value)
        {
         $array[++$key] = [$value->selection2, $value->number];
      
        }

        $data2 = DB::table('online_applications')
        ->select(
           DB::raw('selection1 as selection1'),
           DB::raw('count(*) as number'))
          ->groupBy('selection1')
           ->get();
      
        $array1[] = ['selection1', 'Number'];
        foreach($data2 as $key => $value)
        {
         $array1[++$key] = [$value->selection1, $value->number];
        }

       return view('admin/dashboard',compact('count_applicants'))->with('selection1',json_encode($array1))->with('selection2',json_encode($array));
       
    }
}
