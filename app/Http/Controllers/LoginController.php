<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{
    public function creat()
    {
    	return view('login/creat');
    }
    public function creatdo(Request $request)
    {	
    	$data =$request->except(['_token']);
   		// dd($data);
   		$res=DB::table('user')->insert($data);
   		 // dd($res);
   		if ($res){
   			return redirect('login/log');
   		}
    }

    public function log()
    {
    	return view('login/log');
    }
    public function logdo()
    {
    	$data=request()->all();
        $res =DB::table('user')->where($data)->first();
        if($res){
            
        	return redirect('admin/add');
        }
    }
}
