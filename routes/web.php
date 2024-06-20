<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', App\Livewire\Fontend\HomeComponent::class)->name('home');
Route::get('/contact', App\Livewire\Fontend\ContactComponent::class)->name('contact');

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

    //System
    Route::get('/roles', App\Livewire\Backend\Role\RoleComponent::class)->name('roles');
    Route::get('/users', App\Livewire\Backend\User\UserComponent::class)->name('users');
    Route::get('/vendors', App\Livewire\Backend\User\VendorComponent::class)->name('vendors');
    Route::get('/members', App\Livewire\Backend\User\MemberComponent::class)->name('members');

    Route::get('/profiles', App\Livewire\Auth\ProfileComponent::class)->name('profiles');
    Route::get('/logout', App\Livewire\Auth\LoginComponent::class,'logout')->name('logout');
});