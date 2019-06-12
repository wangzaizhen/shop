<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Tools\Tools;
use DB;

class AdminController extends Controller
{
	// public $tools;
	// public function __construct(Tools $tools){
	// 	$this->tools = $tools;
	// } 
	public function index()
	{
		// $redis = $this->tools->getRedis();

		$redis = new \Redis();
		$redis->connect('127.0.0.1','6379');
		$redis->incr('num');
		$where=[];
		$data=DB::table('student')->get();
		$data=DB::table('student')->where($where)->paginate(1);

		return view('admin/index',['data'=>$data]);
	}
    public function add()
    {
    	$redis = new \Redis();
    	$redis->connect('127.0.0.1','6379');
    	$num = $redis->get('num');
    	echo $num."<br/>";
    	return view('admin/add');
    }
   public function doadd(Request $request)
   {
   		$data =$request->except(['_token']);
   		// dd($data);
   		$res=DB::table('student')->insert($data);
   		// dd($res);
   		if ($res){
   			return redirect('admin/index');
   		}
   }
   public function del($id)
   {
   		$data =DB::table('student')->where(['id'=>$id])->delete();
   		if($data){
   			return redirect('/admin/index');
   		}
   }
   public function edit($id)
   {
   		$res = DB::table('student')->where('id',$id)->first();
   		return view('admin/edit',['res'=>$res]);
   }
   public function update(Request $request)
   {
   	$data =request()->except(['_token']);
   	// dump($data);exit;
   	$res =DB::table('student')->where('id',$data['id'])->update($data);
   	// dump($res);exit;
   	if($res){
   		return redirect('admin/index');
   	}
   }
}
