<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PracticalInformation;
class PracticalInfoController extends Controller
{
    //
    public function index(){
        $partical = PracticalInformation::where('id','1')->first();
        return view('cms.practical',compact('partical'));
    }

        public function update(Request $request){

            $image1= '';
        if ($request->hasFile('imageone_living')) {
            $photo = $request->file('imageone_living');
            $image1 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/partical/', $image1);
             PracticalInformation::where('id','1')->update([  'imageone_living'=>$image1,]);
            
        }

           $imageone = '';
        if ($request->hasFile('imagetwo_living')) {
            $photo1 = $request->file('imagetwo_living');
            $imageone = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo1->getClientOriginalName()
            );
            $photo1->move('assets/partical/', $imageone);
             PracticalInformation::where('id','1')->update(['imagetwo_living'=>$imageone]);
        }

            $imagetwo = '';
        if ($request->hasFile('imagethree_living')) {
            $photo2 = $request->file('imagethree_living');
            $imagetwo = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo2->getClientOriginalName()
            );
            $photo2->move('assets/partical/', $imagetwo);
             PracticalInformation::where('id','1')->update(['imagethree_living'=>$imagetwo]);
        }

            $imagethree = '';
        if ($request->hasFile('imageone_kitchen')) {
            $photo3 = $request->file('imageone_kitchen');
            $imagethree = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo3->getClientOriginalName()
            );
            $photo3->move('assets/partical/', $imagethree);
             PracticalInformation::where('id','1')->update([ 'imageone_kitchen'=>$imagethree]);

         
        }

        $image4 = '';
        if ($request->hasFile('imagetwo_kitchen')) {
            $photo4 = $request->file('imagetwo_kitchen');
            $image4 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo4->getClientOriginalName()
            );
            $photo4->move('assets/partical/', $image4);
             PracticalInformation::where('id','1')->update([ 'imagetwo_kitchen'=>$image4]);

         
        }

             $image5 = '';
        if ($request->hasFile('imageone_bed')) {
            $photo5 = $request->file('imageone_bed');
            $image5 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo5->getClientOriginalName()
            );
            $photo5->move('assets/partical/', $image5);
             PracticalInformation::where('id','1')->update([ 'imageone_bed'=>$image5]);
        }

             $image6 = '';
        if ($request->hasFile('imagetwo_bed')) {
            $photo6 = $request->file('imagetwo_bed');
            $image6 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo6->getClientOriginalName()
            );
            $photo6->move('assets/partical/', $image6);
             PracticalInformation::where('id','1')->update([ 'imagetwo_bed'=>$image6]);
        }

             $image7 = '';
        if ($request->hasFile('imagethree_bed')) {
            $photo7 = $request->file('imagethree_bed');
            $image7 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo7->getClientOriginalName()
            );
            $photo7->move('assets/partical/', $image7);
             PracticalInformation::where('id','1')->update([ 'imagethree_bed'=>$image7]);
        }
             $image8 = '';
        if ($request->hasFile('imageone_bath')) {
            $photo8 = $request->file('imageone_bath');
            $image8 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo8->getClientOriginalName()
            );
            $photo8->move('assets/partical/', $image8);
             PracticalInformation::where('id','1')->update([ 'imageone_bath'=>$image8]);
        }
             $image9 = '';
        if ($request->hasFile('imagetwo_bath')) {
            $photo9 = $request->file('imagetwo_bath');
            $image9 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo9->getClientOriginalName()
            );
            $photo9->move('assets/partical/', $image9);
             PracticalInformation::where('id','1')->update([ 'imagetwo_bath'=>$image9]);
        }

        $image10 = '';
        if ($request->hasFile('sec_image1')) {
            $photo10 = $request->file('sec_image1');
            $image10 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo10->getClientOriginalName()
            );
            $photo10->move('assets/partical/', $image10);
             PracticalInformation::where('id','1')->update([ 'sec_image1'=>$image10]);
        }
        $image11 = '';
        if ($request->hasFile('sec_image2')) {
            $photo11 = $request->file('sec_image2');
            $image11 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo11->getClientOriginalName()
            );
            $photo11->move('assets/partical/', $image11);
             PracticalInformation::where('id','1')->update([ 'sec_image2'=>$image11]);
        }

             $image12 = '';
        if ($request->hasFile('sec_image3')) {
            $photo12 = $request->file('sec_image3');
            $image12 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo12->getClientOriginalName()
            );
            $photo12->move('assets/partical/', $image12);
             PracticalInformation::where('id','1')->update([ 'sec_image3'=>$image12]);
        }



      PracticalInformation::where('id','1')->update([
        'page_title'=>$request->page_title,
        'page_subtitle'=>$request->page_subtitle,
        'title'=>$request->title,
        'subtitle_living'=>$request->subtitle_living,
        'text_living'=>$request->text_living,
        'subtitle_kitchen'=>$request->subtitle_kitchen,
        'text_kitchen'=>$request->text_kitchen,
        'subtitle1_bed'=>$request->subtitle1_bed,
        'text1_bed'=>$request->text1_bed,
        'subtitle2_bed'=>$request->subtitle2_bed,
        'text2_bed'=>$request->text2_bed,
        'subtitle3_bed'=>$request->subtitle3_bed,
        'text3_bed'=>$request->text3_bed,
        'subtitle1_bath'=>$request->subtitle1_bath,
        'text1_bath'=>$request->text1_bath,
        'subtitle2_bath'=>$request->subtitle2_bath,
        'text2_bath'=>$request->text2_bath,
        'one_title'=>$request->one_title,
        'outside_one_title'=>$request->outside_one_title,
        'outside_one_text'=>$request->outside_one_text,
        'outside_one_big'=>$request->outside_one_big,
        'sec_title'=>$request->sec_title,
        'gallery_title'=>$request->gallery_title,
        'gallery_text'=>$request->gallery_text,
        'info_title'=>$request->info_title,
       
      ]);
             toastr()->success('Data has been saved successfully!');

     
        return redirect()->route('PracticalPage');

    }




}
