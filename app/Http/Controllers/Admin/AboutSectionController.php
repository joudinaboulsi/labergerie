<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AboutSection2 ;
class AboutSectionController extends Controller
{
    //

    public function index(){

        $aboutSection = AboutSection2::all();
        return view('cms.about_section2.index',compact('aboutSection'));
    }

    public function create(){
        return view('cms.about_section2.create');
    }

     public function store(Request $request){
         $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/about/', $newPhoto);
        }
       AboutSection2::insert([
           
            'description' => $request->description,
            'image' => $newPhoto,
          
        ]);
       toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('sectionTwo');
    }


     // edit
    public function edit($id){
        $about= AboutSection2::find($id);
        return view('cms.about_section2.edit',compact('about'));
    }



    public function update(Request $request,$id){
         $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/about/', $newPhoto);
            AboutSection2::where('id',$id)->update([
                'image' =>$newPhoto,
            ]);
        }
         AboutSection2::where('id',$id)->update([
         'description' => $request->description,]);
       toastr()->success('Data has been saved successfully!', 'Congrats');

      return redirect()->route('sectionTwo');


    }

        public function delete($id)
    {
       AboutSection2::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
         return redirect()->route('sectionTwo');
    }
}
