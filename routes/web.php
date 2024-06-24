<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', App\Livewire\Fontend\HomeComponent::class)->name('home');
Route::get('/contact', App\Livewire\Fontend\ContactComponent::class)->name('contact');

Route::get('/register', App\Livewire\Fontend\RegisterComponent::class)->name('register');
Route::get('/login-cus', App\Livewire\Fontend\LoginComponent::class)->name('login-cus');

Route::get('/hotel-detail', App\Livewire\Fontend\Booking\HotelDetailComponent::class)->name('hotel-detail');
Route::get('/hotel-room/{id}', App\Livewire\Fontend\Booking\HotelRoomComponent::class)->name('hotel-room');
Route::get('/hotel-check-in', App\Livewire\Fontend\Booking\HotelCheckInComponent::class)->name('hotel-check-in');

Route::get('/login-admin', App\Livewire\Auth\LoginComponent::class)->name('login');

Route::group(['middleware'=> 'auth'], function(){
    Route::get('/dashboards', App\Livewire\Backend\DashboardComponent::class)->name('dashboard');
    Route::get('/districts', App\Livewire\Backend\District\DistrictComponent::class)->name('districts');
    Route::get('/hotels', App\Livewire\Backend\Hotel\HotelComponent::class)->name('hotels');
    Route::get('/buildings', App\Livewire\Backend\Hotel\BuildingComponent::class)->name('buildings');
    Route::get('/rooms', App\Livewire\Backend\Hotel\RoomComponent::class)->name('rooms');

    Route::get('/bookings', App\Livewire\Backend\Booking\BookingComponent::class)->name('bookings');
    Route::get('/openrooms', App\Livewire\Backend\Booking\OpenRoomComponent::class)->name('openrooms');

    //Report
    Route::get('/report1', App\Livewire\Backend\Report\Report1HorelComponent::class)->name('report1');
    Route::get('/report2', App\Livewire\Backend\Report\Report2BookingComponent::class)->name('report2');
    Route::get('/report3', App\Livewire\Backend\Report\Report3RoomComponent::class)->name('report3');
    Route::get('/report4', App\Livewire\Backend\Report\Report4CateRoomComponent::class)->name('report4');
    Route::get('/report5', App\Livewire\Backend\Report\Report5PayComponent::class)->name('report5');
    Route::get('/report6', App\Livewire\Backend\Report\Report6CusComponent::class)->name('report6');
    Route::get('/report7', App\Livewire\Backend\Report\Report7IncomeComponent::class)->name('report7');
    Route::get('/report8', App\Livewire\Backend\Report\Report8UserComponent::class)->name('report8');

    //System
    Route::get('/roles', App\Livewire\Backend\Role\RoleComponent::class)->name('roles');
    Route::get('/users', App\Livewire\Backend\User\UserComponent::class)->name('users');
    Route::get('/vendors', App\Livewire\Backend\User\VendorComponent::class)->name('vendors');
    Route::get('/members', App\Livewire\Backend\User\MemberComponent::class)->name('members');

    Route::get('/profiles', App\Livewire\Auth\ProfileComponent::class)->name('profiles');
    Route::get('/logout', [LogoutController::class,'logout'])->name('logout');

    //Member
    Route::get('/list-bookings', App\Livewire\Fontend\Member\ListBookingComponent::class)->name('list-bookings');
});