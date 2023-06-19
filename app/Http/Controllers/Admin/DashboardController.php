<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataBooking;


class DashboardController extends Controller
{
    public function index(){
        $data = DataBooking::all();
        return view('cms.booking_data',compact('data'));
    }
}
