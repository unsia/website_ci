<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Provinsi;

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
        $data['user'] = User::find(\Auth::user()->id);

        if(!empty($data['user']->hasRegistrant->status)) {
            if($data['user']->hasRegistrant->status == 'created') {
                return redirect()->route('student.form_register');
            }
        }
        return view('home');
    }
}
