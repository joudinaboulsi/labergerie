<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
class SliderController extends Controller
{
     public function index(){
        $sliders =  Slider::all();
        return view('cms.slider.index',compact('sliders'));
    }

    public function create(){
        return view('cms.slider.create');
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
            $photo->move('assets/slider/', $newPhoto);
        }
      Slider::insert([
        'subtitle'=>$request->subtitle,
        'title'=>$request->title,
        'main_title'=>$request->main_title,
        'link_text'=>$request->link_text,
        'link_url'=>$request->link_url,
        'image'=>$newPhoto,
      ]);
        toastr()->success('Data has been saved successfully!');

        return redirect()->route('slider');

    }

    // edit
    public function edit($id){
        $slider =  Slider::find($id);
        return view('cms.slider.edit',compact('slider'));
    }

    // update

    public function update(Request $request,$id){
            $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/slider/', $newPhoto);
              Slider::where('id', $id)->update(['image'=> $newPhoto]);
        }
      Slider::where('id', $id)->update([
        'subtitle'=>$request->subtitle,
        'title'=>$request->title,
        'main_title'=>$request->main_title,
        'link_text'=>$request->link_text,
        'link_url'=>$request->link_url,
        
      ]);
              toastr()->success('Data has been saved successfully!');

        return redirect()->route('slider');
    }


       public function delete($id)
    {
        Slider::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
         return redirect()->route('slider');
    }
}
