<?php
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AllUserComponent;
use App\Http\Livewire\Admin\AllMessageComponent;
use App\Http\Livewire\Admin\AllReferralComponent;
use App\Http\Livewire\Admin\AllContactComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Sprovider\SproviderDashboardComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeComponent::class)->name('home');

// customer route
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/customer/dashboard',CustomerDashboardComponent::class)->name('customer.dashboard');
});

// sprovider (Admin two) route
Route::middleware(['auth:sanctum', 'verified', 'authsprovider'])->group(function(){
   Route::get('/sprovider/dashboard',SproviderDashboardComponent::class)->name('sprovider.dashboard');
});

// supper Admin route
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('admin/all-user',AllUserComponent::class)->name('all_user');
    Route::get('admin/all-message',AllMessageComponent::class)->name('all_message');
    Route::get('admin/contact',AllContactComponent::class)->name('contact');
    Route::get('admin/referrals',AllReferralComponent::class)->name('referral');
});
