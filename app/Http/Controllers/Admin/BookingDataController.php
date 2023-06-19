<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\DataBooking;
use Auth;
class BookingDataController extends Controller
{
    //
    public function index(){
        $data = DataBooking::all();
        return view('cms.booking_data',compact('data'));
    }

    public function sendRequest(Request $request){
 
      $name = $request->input('name');
      $email = $request->input('email');
      $phone = $request->input('phone');
      $end = $request->input('end');
      $start = $request->input('start');
  
       $data = request()->except(['_token']);
      DataBooking::insert($data);
    //   dd($data);
  
          Mail::send('emails.data', array('name' => $name, 'email' => $email, 'phone' => $phone,
           'start'=>$start,'end'=>$end), function($message) use ($email, $name)
          {
              $message->from($email, $name);
              $message->to(Auth::user()->email)->subject('Message from Website');
          });
          \Session::flash('msg', 'Successfully sent!' );
       
      
     
 return redirect()->back();
}
}
