<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tasks;
class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $model = new tasks;
        return view('index',['tasks'=>$model->retrieve(),'illegal'=>$request->illegal]);
    }

    public function add()
    {
        return view('add');
    }

    public function submit(Request $request)
    {
		//submit new task
		if ($request -> input('newtask') == "")
			return redirect('/?illegal=1');
		$model = new tasks;
		$model -> task = $request -> input('newtask');
		$model -> save();
		return redirect()->action('MainController@index');
    }
	
	public function remove($id)
	{
		$model = new tasks;
		$model -> destroy($id);
		return redirect()->action('MainController@index');
	}
}
