<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Models\BookingDetail;
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

                View::share(['noti'=>$noti,'count_noti'=>$count_noti]);
            }
        });
    }
}
