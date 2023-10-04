<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinfos;


class UserinfosController extends Controller
{
    //post
    public function adding(Request $request)
    {
        $items=new Userinfos();
        $items->name=$request->name;
        $items->gender=$request->gender;
        $items->age=$request->age;

        $items->save();
        
        return response()->json(['message' => 'Adding Successfully']);
    }

      //edit
    public function editing(Request $request)
    {
        $items= Userinfos::findorfail($request->id);
     
        $items->name=$request->name;
        $items->gender=$request->gender;
        $items->age=$request->age;

        $items->update();
        
        return response()->json(['message' => 'Edit Successfully']);
    }
    // delete
    public function delete(Request $request)
    {
        $items= Userinfos::findorfail($request->id)->delete();
        return response()->json(['message' => 'Delete  Successfully']);
    }

    // get
    public function getting()
    {
        $items= Userinfos::all();
        return response()->json($items);
    }
}
