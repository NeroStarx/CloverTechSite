<?php

namespace App\Http\Controllers;

use App\User;
use App\Wilaya;
use Illuminate\Http\Request;

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
        return view('home')->with('nombreuser',User::all()->count())->with('nombresafe',Wilaya::where('etat',true)->count())
            ->with('nombredanger',Wilaya::where('etat',false)->count());
    }
}
