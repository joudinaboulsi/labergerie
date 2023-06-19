<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
class ServicesController extends Controller
{
    //

    public function index(){
        $services = Service::all();
        return view('cms.services.index',compact('services'));
    }

      public function create(){
        return view('cms.services.create');
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
            $photo->move('assets/services/', $newPhoto);
        }
      Service::insert([
        
        'text'=>$request->text,
    
        'icon'=>$newPhoto,
      ]);
        toastr()->success('Data has been saved successfully!');
        
        return redirect()->route('services');

    }

      public function edit($id){
        $service = Service::find($id);
        return view('cms.services.edit',compact('service'));
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
            $photo->move('assets/services/', $newPhoto);
              Service::where('id', $id)->update(['icon'=> $newPhoto]);
        }
      Service::where('id', $id)->update([
          
        'text'=>$request->text,
        
      ]);
        toastr()->success('Data has been saved successfully!');

        return redirect()->route('services');
    }

    
    public function delete($id)
    {
       Service::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
         return redirect()->route('services');
    }
}
