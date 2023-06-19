<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Settings;
use Carbon\Carbon;
class SettingsController extends Controller
{
    //
     public function settings(){
        $settings = Settings::where('id','1')->first();
        return view('cms.settings',compact('settings'));
    }


    public function settingsSave(Request $request){
         $newLogo = '';
        if ($request->hasFile('logo')) {
            $photoLogo = $request->file('logo');
            $newLogo = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photoLogo->getClientOriginalName()
            );
            $photoLogo->move('cms/logo', $newLogo);
        }
        settings::where('id','1')->update([
            'phone'=>$request->phone,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
            'address'=>$request->address,
            'map'=>$request->map,
            'main'=>$request->main,
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'logo'=>$newLogo,
            'updated_at' => Carbon::now(),
        ]);

              toastr()->success('Data has been saved successfully!');

        return redirect()->route('settings');
    }
}
