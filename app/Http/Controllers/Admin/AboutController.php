<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;
use Carbon\Carbon;
class AboutController extends Controller
{
    //
    public function index(){
        $about = About::where('id','1')->first();
        return view('cms.about',compact('about'));
    }


    public function update(Request $request){

            $imageAbout= '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $imageAbout = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/about/', $imageAbout);
             About::where('id','1')->update([  'image'=>$imageAbout,]);
            
        }

           $imageone = '';
        if ($request->hasFile('image1')) {
            $photo1 = $request->file('image1');
            $imageone = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo1->getClientOriginalName()
            );
            $photo1->move('assets/about/', $imageone);
             About::where('id','1')->update(['image1'=>$imageone]);
        }

            $imagetwo = '';
        if ($request->hasFile('image2')) {
            $photo2 = $request->file('image2');
            $imagetwo = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo2->getClientOriginalName()
            );
            $photo2->move('assets/about/', $imagetwo);
             About::where('id','1')->update(['image2'=>$imagetwo]);
        }

            $imagethree = '';
        if ($request->hasFile('image3')) {
            $photo3 = $request->file('image3');
            $imagethree = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo3->getClientOriginalName()
            );
            $photo3->move('assets/about/', $imagethree);
             About::where('id','1')->update([ 'image3'=>$imagethree]);

         
        }

        $background = '';
        if ($request->hasFile('bg')) {
            $photo4 = $request->file('bg');
            $background = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo4->getClientOriginalName()
            );
            $photo4->move('assets/about/', $background);
             About::where('id','1')->update([ 'bg'=>$background]);

         
        }

      About::where('id','1')->update([
        'page_title'=>$request->page_title,
        'page_subtitle'=>$request->page_subtitle,
        'title'=>$request->title,
        'subtitle'=>$request->subtitle,
        'main'=>$request->main,
        'text1'=>$request->text1,
        'text2'=>$request->text2,
        'text3'=>$request->text3,
        'title_backg'=>$request->title_backg,
        'updated_at' => Carbon::now(),
    
      ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('AboutPage');

    }
}
