<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
  use App\Contact;
  use Carbon\Carbon;
class ContactController extends Controller
{
    //
     public function contactCms(){
        $contact= Contact::where('id','1')->first();
    
        return view('cms.contact',compact('contact'));
    }


    public function contactUpdate(Request $request){
        Contact::where('id','1')->update([
      
            'page_title'=>$request->page_title,
            'page_subtitle'=>$request->page_subtitle,
            'title_form'=>$request->title_form,
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('contactPage');
    }
}
