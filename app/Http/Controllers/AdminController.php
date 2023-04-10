<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use App\Models\Navbar_one;
use Illuminate\Http\Request;

class AdminController extends Controller
{
//    public function AdminIndex()
//    {
//
//        return view('admin.index');
//    }


    public function AdminIndex()
    {$user=FormData::all();

        return view('admin.formData',compact('user'));

        return view('admin.formData');
    }




    public function form_Data(Request $request)
    {

//        $request->validate([
//            'Name' => 'required|string',
//            'Email' => 'required|min:10|string|email',
//            'Mobile' => 'required|min:10|max:10|string',
//            'Country' => 'required|string',
//            'Pickup' => 'required|string',
//            'drop' => 'required|string',
//            'Pickuplocation' => 'required|string',
//            'Remarks' => 'required|string',
//
////         'profile' => 'required|mimes:jpg,jpeg,png',
//        ]);

        $data = $request->except(['_token']);

        $user =new FormData();

        if (!empty($user)) {

            $user->Name=$request->Name;
            $user->Email=$request->Email;
            $user->Mobile=$request->Mobile;
            $user->Country=$request->Country;
            $user->Pickup=$request->Pickup;
            $user->drop=$request->drop;
            $user->Pickuplocation=$request->Pickuplocation;
            $user->Remarks=$request->Remarks;

            $user->save();
            return redirect()->back()->with('success', 'Query send successfull');
        } else {

            return redirect()->back()->with('danger', 'something is wrong');
        }
    }


}





