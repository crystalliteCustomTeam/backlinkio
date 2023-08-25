<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use PhpParser\Node\Expr\Cast\Object_;


class DashboardController extends Controller
{



    function home(Request $request){
        $customer = $request->session()->get('Customer');
        return view('Templates.dashboard',['OnlineCustomer'=> $customer]);
    }

    function createOrder(Request $request){
        $customer = $request->session()->get('Customer');
        $da = DB::table('da')->orderBy('DA')->where('status','active')->get();
        return view('Templates.seoproduct',['OnlineCustomer'=> $customer,'DA' => $da]);
    }

    function ajax_call_da_plan(Request $request){
        $DA_Catrecords = DB::table('dacategory')->where('da_id',$request['da'])->get();
        return $DA_Catrecords;
    }

    function daplans(Request $request){
        $customer = $request->session()->get('Customer');
        $merge = [];
        $DA_records = DB::table('da')->get();
        foreach ($DA_records as $DA){
            $DA_Catrecords = DB::table('dacategory')->where('da_id',$DA->id)->get();
            array_push($merge , [
               'id'=> $DA->id,
                'DA' => $DA->DA,
                'Category' => $DA_Catrecords
            ]);
        }
     return view('Templates.plans',['OnlineCustomer'=> $customer,'DARECORDS' => $merge]);
    }

    function daprocess(Request $request){
        $DA = $request->da;
        $DA_Response = DB::table('da')->insert([
            'DA' => $DA,
            'status' => "Active"
        ]);

        return $DA_Response;
    }

    function daCat(Request $request){
        $DA_id = $request->da_id;
        $Cat_Response = DB::table('dacategory')->insert([
           'da_id' => $DA_id,
            'title' => $request->cat_Name,
            'price' => $request->cat_Price,
            'status' => "Active"
        ]);
        return $Cat_Response;
    }
}
