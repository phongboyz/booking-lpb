<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\Users;
use App\Models\LogBooking;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        View::composer('*', function($view)
        {
            if (Auth::check()){
                $noti = Booking::where('approve_id',auth()->user()->id)->where('status',1)->orderBy('id','asc')->limit(3)->get();
                $count_noti = Booking::where('approve_id',auth()->user()->id)->where('status',1)->count();
                $log_booking = LogBooking::where('user_id',auth()->user()->id)->where('read',1)->get();
                $log_booking_f = LogBooking::where('user_id',auth()->user()->id)->where('read',1)->count('id');
                $auth_check = Auth::check();
                // dd(auth()->check());
                View::share(['auth_check'=>$auth_check,'noti'=>$noti,'count_noti'=>$count_noti,'log_booking'=>$log_booking, 'log_booking_f'=>$log_booking_f]);
            }
        });

        $auth_check = Auth::check();
        // dd($auth_check);
        View::share(['auth_check'=>$auth_check]);
    }
}
