<?php

namespace App\Http\Controllers;

use App\Models\Navbar_one;
use Illuminate\Http\Request;

class CarController extends Controller
{


    public function index()
    {
        $user=Navbar_one::first();
        return view('index',compact('user'));
    }
    public function about()
    {
        $user=Navbar_one::first();
        return view('about-us',compact('user'));
    }

    public function contact()
    {
        $user=Navbar_one::first();
        return view('contact',compact('user'));
    }

    public function budget_cars()
    {
        $user=Navbar_one::first();
        return view('budget-cars',compact('user'));
    }

    public function budget_cars_1()
    {
        $user=Navbar_one::first();
        return view('budget-cars.maruti-swift-dzire',compact('user'));
    }
    public function budget_cars_2()
    {
        $user=Navbar_one::first();
        return view('budget-cars.maruti-vitara-brezza',compact('user'));
    }
    public function budget_cars_3()
    {
        $user=Navbar_one::first();
        return view('budget-cars.nissan-magnite',compact('user'));
    }
    public function budget_cars_4()
    {
        $user=Navbar_one::first();
        return view('budget-cars.kia-seltos-htk-plus-automatic-car',compact('user'));
    }

    public function muv_suv_cars()
    {
        $user=Navbar_one::first();
        return view('muv-suv-cars',compact('user'));
    }
    public function muv_suv_cars_1()
    {
        $user=Navbar_one::first();
        return view('muv-suv-cars.hyundai-creta-ex-mt-diesel',compact('user'));
    }

    public function muv_suv_cars_2()
    {
         $user=Navbar_one::first();
        return view('muv-suv-cars.hyundai-venue-s-mt-ptl',compact('user'));
    }

    public function suvs_cars()
    {
         $user=Navbar_one::first();
        return view('4x4-suvs-cars',compact('user'));
    }
    public function suv_cars_1()
    {
         $user=Navbar_one::first();
        return view('4x4-suvs-cars.ford-endeavour-32l-titanium-plus-4x4-automatic',compact('user'));
    }
    public function suv_cars_2()
    {
         $user=Navbar_one::first();
        return view('4x4-suvs-cars.isuzu-d-max-v-cross-4x4',compact('user'));
    }

    public function luxury_cars()
    {
         $user=Navbar_one::first();
        return view('luxury-cars',compact('user'));
    }
    public function luxury_cars_1()
    {
         $user=Navbar_one::first();
        return view('luxury-cars.audi-a6-matrix-edtion-car',compact('user'));
    }
    public function luxury_cars_2()
    {
         $user=Navbar_one::first();
        return view('luxury-cars.audi-q2',compact('user'));
    }
    public function luxury_cars_3()
    {
         $user=Navbar_one::first();
        return view('luxury-cars.audi-q5-45-tfsi-technology',compact('user'));
    }


    public function self_drive_locations()
    {
         $user=Navbar_one::first();
        return view('self-drive-locations',compact('user'));
    }
    public function self_drive_locations_1()
    {
         $user=Navbar_one::first();
        return view('self-drive-location.jabalpur',compact('user'));
    }
    public function self_drive_locations_2()
    {
         $user=Navbar_one::first();
        return view('self-drive-location.indore',compact('user'));
    }
    public function self_drive_locations_3()
    {
         $user=Navbar_one::first();
        return view('self-drive-location.bhopal',compact('user'));
    }

//    public function index()
//    {
//        return view('');
//    }
//
//    public function index()
//    {
//        return view('index');
//    }
//
//    public function index()
//    {
//        return view('index');
//    }


}
