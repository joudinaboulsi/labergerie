<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;

class AdminController extends Controller
{
    //
      public function index(){
      $page = Page::where('id','1')->first();
        return view('cms.seo',compact('page'));
    }


// update
    public function update(Request $request){

           $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/seo', $newPhoto);
             Page::where('id','1')->update([ 'image' => $newPhoto]);
        }

        $page = Page::where('id','1')->update([
            'name' => $request->name,
            'meta_title' => $request->meta_title,
           
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        
         
        ]);
        toastr()->success('Data has been saved successfully!');

      
        return redirect()->route('seo');
    }
}


