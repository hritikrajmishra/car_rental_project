<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Navbar_one;
use App\Models\User;
use Illuminate\Http\Request;

class NavbarOneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=Navbar_one::all();
        return view('admin.site_nav_one_form',compact('user'));
    }


    public function EditNavData(Request $request, $id)
    {

        $nData = Navbar_one::findOrFail(1);
        if (empty($nData)) {
            return redirect()->back()->with('warning', 'user not found');
        }
        return view('admin.site_nav_one_edit', compact( 'nData'));

    }

    public function UpdateNavData(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'fav_icon' => 'mimes:jpg,jpeg,png',
            'mobile' => 'required|min:10|max:10|string',
            'email' => 'required|min:10|string|email',
            'about_us' => 'required|string',
            'fb' => 'required|string',
            'insta' =>'required|string',
            'tweeter' => 'required|string',
            'ldn' =>'required|string',
            'pintrest' =>'required|string',
            'yt' => 'required|string',
//         'profile' => 'required|mimes:jpg,jpeg,png',
        ]);

        $data = $request->except(['_token', 'update']);
//        dd($data);
        $user = Navbar_one::findOrFail(1);
        if (!empty($user)) {
            $user->update($data);
            return redirect('admin/site_nav_one_form')->with('success', 'Navbar update successfull');
        } else {

            return redirect()->back()->with('danger', 'something is wrong');
        }
    }


    public function UpdateFavImage(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'fav_icon' => 'required|mimes:jpg,jpeg,png',
        ]);

        $requestData = $request->except(['_token', 'regist']);

        $imgName = 'sr_' . rand() . '.' . $request->fav_icon->extension();

        $request->fav_icon->move(public_path('profiles/'), $imgName);

        $requestData['fav_icon'] = $imgName;
        $user = Navbar_one::find($id);
        $existingProfile = $user->fav_icon;

        $user->update($requestData);
        unlink("profiles/" . $existingProfile);
//     $profileExists = public_path("profiles/$existingProfile");
//     if(file_exists($profileExists)) {
//     unlink("profiles/$existingProfile");
//     }
        return redirect()->back()->with('success', 'profile image update successfull');
    }
    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Navbar_one $navbar_one)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Navbar_one $navbar_one)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Navbar_one $navbar_one)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Navbar_one $navbar_one)
    {
        //
    }
}
