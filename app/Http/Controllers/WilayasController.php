<?php

namespace App\Http\Controllers;

use App\Decision;
use App\Wilaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WilayasController extends Controller
{

   public function getAllWilayas(){

       return view('view.wilaya')->with('wilayas',Wilaya::all());

   }


    public function store(Request $request)
    {
        $this->validate($request,[
                'name'=>'required'
            ]
        );
        $Wilaya=new Wilaya();
        $Wilaya->name=$request->name;
        $Wilaya->user_id=Auth::id();
        $Wilaya->save();
        return  redirect()->back();
    }



    public function update(Request $request)
    {
        $this->validate($request,[
                'wilaya_id'=>'required'
                ,'etat'=>'required',


            ]
        );

        $Wilaya=Wilaya::find($request->wilaya_id);
        if ($request->etat=="danger"){
        $Wilaya->etat=true;}
        else if ($request->etat=="safe"){
            $Wilaya->etat=false;
        }
        $Wilaya->user_id=Auth::id();
        $Wilaya->save();

        return  redirect()->back();

    }
    public function delete($id)
    {
        $Wilaya=Wilaya::find($id);
        foreach ($Wilaya->decision as $decision){
            $decision->forceDelete();

        }
        $Wilaya->delete($id);
        return  redirect()->back();


    }


}
