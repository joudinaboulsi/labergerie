<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Home;
class HomeController extends Controller
{
 //
    public function index(){
        $home = Home::where('id','1')->first();
        return view('cms.home',compact('home'));
    }


    public function update(Request $request){
            $imageHome = '';
        if ($request->hasFile('image_home')) {
            $photo = $request->file('image_home');
            $imageHome = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/home/', $imageHome);
               Home::where('id','1')->update([ 'image_home'=>$imageHome]);
        }

           $imageoneInfo = '';
        if ($request->hasFile('imageone_info')) {
            $photo1 = $request->file('imageone_info');
            $imageoneInfo = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo1->getClientOriginalName()
            );
            $photo1->move('assets/home/', $imageoneInfo);
            Home::where('id','1')->update([ 'imageone_info'=>$imageoneInfo]);

        }

            $imagetwoInfo = '';
        if ($request->hasFile('imagetwo_info')) {
            $photo2 = $request->file('imagetwo_info');
            $imagetwoInfo = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo2->getClientOriginalName()
            );
            $photo2->move('assets/home/', $imagetwoInfo);
            Home::where('id','1')->update(['imagetwo_info'=>$imagetwoInfo]); 
        }

      Home::where('id','1')->update([
        'page_title'=>$request->page_title,
        'page_subtitle'=>$request->page_subtitle,

        'title_home'=>$request->title_home,
        'text_home'=>$request->text_home,
       
        'subtitle_home'=>$request->subtitle_home,
        'title_info'=>$request->title_info,
        'contenetone_info'=>$request->contenetone_info,
        'contenetwo_info'=>$request->contenetwo_info,
    
        'title_service'=>$request->title_service,

        'title1_service'=>$request->title1_service,
        'title2_service'=>$request->title2_service,
        'title3_service'=>$request->title3_service,
        'text1_service'=>$request->text1_service,
        'text2_service'=>$request->text2_service,
        'text3_service'=>$request->text3_service,
       
      
      ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('HomePage');

    }
}
