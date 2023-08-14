<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\news\NewsController;
use App\Http\Controllers\home\CausesController;
use App\Http\Controllers\home\AboutController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminDonorsController;
use App\Http\Controllers\admin\AdminVolunteersController;
use App\Http\Controllers\admin\CasesController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\home\SinglePageDonateController;
use App\Http\Controllers\home\DonateController;
use App\Http\Controllers\admin\AdminEventController;
use App\Http\Controllers\home\EventController;
use App\Http\Controllers\home\SuccessController;
use App\Http\Controllers\home\ZakahController;
use App\Http\Controllers\home\SinglePageEventController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\home\ProfileuserController;
use App\Http\Controllers\admin\ProfileadminController;
use App\Http\Controllers\home\SeekSupportController;
use App\Http\Controllers\home\ReceiptController;
use GuzzleHttp\Middleware;

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

Route::get('/', function () {
    return view('welcome');
});




Route::resource('/',HomeController::class);
Route::resource('home',HomeController::class);
Route::resource('/about',AboutController::class);
Route::resource('/causes',CausesController::class);
Route::resource('/SeekSupport',SeekSupportController::class);
Route::resource('/news',EventController::class);
Route::resource('/donation',DonateController::class);
Route::resource('/success',SuccessController::class);
Route::resource('/zakah',ZakahController::class);
Route::resource('/receipt',ReceiptController::class);


Route::get('/credibility', [HomeController::class, 'donors'])->name('credibility');



Route::get('/events/{id}', 'home\SinglePageEventController@index')->name('events.singlePage');


Route::get('/events/{id}', 'App\Http\Controllers\home\SinglePageEventController@index')->name('events.singlePage');
Route::get('/single-page/{id}', [App\Http\Controllers\event\SinglePageEventController::class, 'index'])->name('single.page');


Route::resource('/volunteerr',SinglePageEventController::class);


Route::get('/single-page/{id}', [SinglePageDonateController::class, 'index'])->name('single.page');

Route::get('/donate/{id}', [DonateController::class, 'index'])->name('donate.index');
Route::post('/donate/store/{id}', [DonateController::class, 'store'])->name('donation.store');
Route::get('/donation/{id}', [DonateController::class, 'index'])->name('donation.index');

Route::get('/logout', function () {
    auth()->logout();  // Logout the user

    session()->invalidate();  // Invalidate the session
    session()->regenerateToken();  // Regenerate the CSRF token

    return redirect('/');  // Redirect to the root URL
})->name('logout');








Route::get('/login', [LoginController::class, 'index'])->name('sign-up.index');
Route::post('/register', [SignupController::class, 'store'])->name('sign-up');
Route::post('/login/check', [LoginController::class, 'check'])->name('login.check');
Route::match(['get', 'post'], '/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/sign-up', [SignupController::class, 'index'])->name('sign-up.index');
Route::get('/sign-up', [SignupController::class, 'index'])->name('sign-up.index');











// Middleware

Route::middleware('role:1')->group(function () {
    // Admin

    Route::resource('/admin',AdminDashboardController::class);
Route::resource('/tableData',Tables_DataController::class);
Route::resource('/tableShow',Tables_ShowController::class);
Route::get('/admin/cases', 'AdminDashboardController@index')->name('adminDashboard.cases.index');

Route::resource('/casesTable', CasesController::class);
Route::post('/cases', 'CasesController@store')->name('cases.store');
Route::put('/cases/{id}', [CasesController::class, 'update'])->name('cases.update');
Route::get('/cases/{case}/edit', [CasesController::class, 'edit'])->name('cases.edit');
Route::get('/casesTable/{case}', [CasesController::class, 'show'])->name('casesTable.show');
Route::resource('/event',AdminEventController::class);



Route::resource('/dashboard-admin',DashboardController::class);

Route::resource('/profile-admin',ProfileadminController::class);
Route::put('/admin/profile/{id}', [ProfileadminController::class, 'update'])->name('admin.profile.update');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('adminDashboard.dashboard');



Route::get('/contacts', [AdminDashboardController::class, 'index'])->name('contacts');

Route::resource('/Admin-volunteer',AdminVolunteersController::class);
Route::resource('/Admin-donor',AdminDonorsController::class);

});





Route::middleware('role:2')->group(function () {
    // User
    Route::resource('/profile-user',ProfileuserController::class);
    Route::post('/profile-user', [ProfileuserController::class, 'store'])->name('profile-user.store');
});
