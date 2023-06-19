<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
class GalleryController extends Controller
{
    //
    //index
    public function index(){
        $gallery= Gallery::all();
        return view('cms.gallery.index',compact('gallery'));
    }

    // create
    public function create(){
        return view('cms.gallery.create');
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
            $photo->move('assets/gallery/', $newPhoto);
        }
        $Gallery = Gallery::insert([
           
            'title' => $request->title,
            'image' => $newPhoto,
          
        ]);
       toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('galleryImage');
    }
    // edit
    public function edit($id){
        $gallery= Gallery::find($id);
        return view('cms.gallery.edit',compact('gallery'));
    }



    public function updateImage(Request $request,$id){
         $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/gallery/', $newPhoto);
            Gallery::where('id',$id)->update([
                'image' =>$newPhoto,
            ]);
        }
         Gallery::where('id',$id)->update([
         'title' => $request->title,]);
       toastr()->success('Data has been saved successfully!', 'Congrats');

                return redirect()->route('galleryImage');


    }

    public function delete($id)
    {
       Gallery::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
         return redirect()->route('galleryImage');
    }
}
