<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $users_list = User::all();
        //print_r($users);die();
        return view('home' , ['users' => $users_list] );
    }

    public function upload(Request $request)
    {
        if($request->hasFile('profile_pic')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            Auth()->user()->update(['profile_pic'=>$filename]);
        }
        return redirect()->back();
    }
}
