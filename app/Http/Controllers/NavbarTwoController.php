<?php

namespace App\Http\Controllers;

use App\Models\Navbar_Two;
use Illuminate\Http\Request;

class NavbarTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $user=Navbar_Two::all();
        return view('admin.site_nav_two_form',compact('user'));
    }


    public function EditNavData(Request $request, $id)
    {

        $nData = Navbar_Two::findOrFail(1);
        if (empty($nData)) {
            return redirect()->back()->with('warning', 'user not found');
        }
        return view('admin.site_nav_two_edit', compact( 'nData'));

    }

    public function UpdateNavData(Request $request, $id)
    {
        $request->validate([
            'logo' => 'mimes:jpg,jpeg,png',
            'home_link' => 'required|string',
            'budget_car' => 'required|string',
            'muv_suv' => 'required|string',
            'suv_car' => 'required|string',
            'luxury' =>'required|string',
            'self_drive' => 'required|string',
            'contact' =>'required|string',
//         'profile' => 'required|mimes:jpg,jpeg,png',
        ]);

        $data = $request->except(['_token', 'update']);
//        dd($data);
        $user = Navbar_Two::findOrFail(1);
        if (!empty($user)) {
            $user->update($data);
            return redirect('admin/site_nav_two_form')->with('success', 'Navbar update successfull');
        } else {

            return redirect()->back()->with('danger', 'something is wrong');
        }
    }


    public function UpdatelogoImage(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'logo' => 'required|mimes:jpg,jpeg,png',
        ]);

        $requestData = $request->except(['_token', 'regist']);

        $imgName = 'sr_' . rand() . '.' . $request->logo->extension();

        $request->logo->move(public_path('profiles/'), $imgName);

        $requestData['logo'] = $imgName;
        $user = Navbar_Two::find($id);
        $existingProfile = $user->logo;
        $user->update($requestData);

//     $profileExists = public_path("profiles/$existingProfile");
//     if(file_exists($profileExists)) {
//     unlink("profiles/$existingProfile");
//     }
        return redirect()->back()->with('success', 'profile image update successfull');
    }
}
