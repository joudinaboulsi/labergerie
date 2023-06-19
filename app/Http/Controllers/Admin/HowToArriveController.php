<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HowToArrive;
class HowToArriveController extends Controller
{
    //
       public function index(){
        $arrive= HowToArrive::where('id',1)->first();
        return view('cms.arrive_page',compact('arrive'));
    }


    public function update(Request $request){
      $imageArrive= '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $imageArrive = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/arrive/', $imageArrive);
             HowToArrive::where('id','1')->update(['image'=>$imageArrive,]);
            
        }

         HowToArrive::where('id','1')->update([
        'page_title'=>$request->page_title,
        'page_subtitle'=>$request->page_subtitle,
        'title'=>$request->title,
        'subtitle'=>$request->subtitle,
        'main'=>$request->main,
        'map'=>$request->map,
        'content'=>$request->content,
      ]);
        toastr()->success('Data has been saved successfully!');
      
        return redirect()->route('arrivePage');

    }
}
