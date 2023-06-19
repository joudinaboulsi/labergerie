<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GalleryPage;

class GalleryPageController extends Controller
{
    //

     public function gallery_page(){
        $gallery= GalleryPage::where('id',1)->first();
        return view('cms.gallery_page',compact('gallery'));
    }

    public function update(Request $request){
    
        GalleryPage::where('id',1)->update([
            'page_title'=>$request->page_title,
            'page_subtitle'=>$request->page_subtitle,
        ]);
               toastr()->success('Data has been saved successfully!');
        return redirect()->route('galleryPage');
    }


}
