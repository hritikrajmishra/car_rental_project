<?php
 
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/', function () {
//     return view('index');
// });
//
//Route::get('contact-us', function () {
//    return view('contact');
//});
//
//Route::get('budget-cars', function () {
//    return view('budget-cars');
//});
//
//
//Route::get('muv-suv-cars', function () {
//    return view('muv-suv-cars');
//});
//
//Route::get('4x4-suvs-cars', function () {
//    return view('4x4-suvs-cars');
//});
//
//Route::get('luxury-cars', function () {
//    return view('luxury-cars');
//});
//Route::get('self-drive-locations', function () {
//    return view('self-drive-locations');
//});

//Route::get('/', [CarController::class, 'index']);


Route::controller(CarController::class)->group(function ()
{
    Route::get('/','index');
    Route::get('about-us','about');
    Route::get('contact-us', 'contact');

    Route::get('budget-cars',  'budget_cars');
    Route::get('budget-marutiswiftdzire',  'budget_cars_1');
    Route::get('budget-cars-maruti-vitara-brezza',  'budget_cars_2');
    Route::get('budget-cars-nissan-magnite',  'budget_cars_3');
    Route::get('budget-cars-kia-seltos-htk-plus-automatic-car',  'budget_cars_4');

    Route::get('muv-suv-cars',  'muv_suv_cars');
    Route::get('4x4-suvs-cars',  'suvs_cars');
    Route::get('luxury-cars',  'luxury_cars');
    Route::get('self-drive-locations',  'self_drive_locations');


    //Routemuv/suv
    Route::get('muv-kiacar','muv_suv_cars_1');
    Route::get('muv-suv-cars-hyundai-venue-s-mt-ptl','muv_suv_cars_2');

//4x4 suv
    Route::get('Suv-jeep-wrangler-20l-rubicon-ptl','suv_cars_1');
    Route::get('Suv-toyota-hilux-28l-4x4-mt-diesel','suv_cars_2');

    //luxury-cars
    Route::get('luxury-cars-audi-q2','luxury_cars_1');
    Route::get('luxury-cars-audi-a6-matrix-edtion-car','luxury_cars_2');
    Route::get('luxury-cars-audi-q5-45-tfsi-technology','luxury_cars_3');


    //self-drive-locations
    Route::get('self-drive-locat-jbp',  'self_drive_locations_1');
    Route::get('self-drive-locat-ind',  'self_drive_locations_1');
    Route::get('self-drive-locat-bhp',  'self_drive_locations_1');


});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/querylist', [\App\Http\Controllers\AdminController::class,'Querys']);

Route::group(['prefix' => '/admin',], function () {

    Route::controller(\App\Http\Controllers\AdminController::class)->group(function () {
        Route::get('/index', 'AdminIndex')->name('/admin_dashboard');
        Route::get('/user_list', 'AdminUserList')->name('/admin_user_list');
//        Route::get('/edit_user/{id}', 'EditUserList')->name('/admin_user_edit');
//        Route::post('/update_user/{id}', 'UpdateUser')->name('/admin_users_update');
//        Route::post('/update_user_image/{id}', 'UpdateUserImage')->name('/admin_user_image_update');
        Route::get('/register-user', 'RegisterUserForm')->name('/register_user');
        Route::post('/register-user', 'RegisterUserSendData')->name('/register_user_data');
        Route::get('/change-user-status/{id}/{status?}', 'ChangeUserStatus')->name('/admin_change_user_status');
    });



    Route::controller(\App\Http\Controllers\NavbarOneController::class)->group(function (){
        Route::get('/site_nav_one_form', 'index');
        Route::get('/edit_user/{id}', 'EditNavData');
        Route::post('/update_user/{id}', 'UpdateNavData')->name('/admin_users_update');
        Route::post('/update_user_image/{id}', 'UpdateFavImage')->name('/admin_user_image_update1');

    });

    Route::controller(\App\Http\Controllers\NavbarTwoController::class)->group(function (){
        Route::get('/site_nav_two_form', 'index');
        Route::get('/edit_user2/{id}', 'EditNavData');
        Route::post('/update_user2/{id}', 'UpdateNavData')->name('/admin_users_update2');
        Route::post('/update_user_image2/{id}', 'UpdatelogoImage')->name('/admin_user_image_update2');

    });

   // Route::resource('NavbarOnes',\App\Http\Controllers\NavbarOneController::class);
});
Route::post('formData',[\App\Http\Controllers\AdminController::class,'form_Data']);
