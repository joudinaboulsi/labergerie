<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookNow;

class BookNowController extends Controller
{
    //

    public function index(){
        $book_now =  BookNow::all();
        return view('cms.book.index',compact('book_now'));
    }

    public function create(){
        return view('cms.book.create');
    }


    public function store(Request $request){
            $imageone = '';
        if ($request->hasFile('image_one')) {
            $photo1 = $request->file('image_one');
            $imageone = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo1->getClientOriginalName()
            );
            $photo1->move('assets/book/', $imageone);
          
        }

        BookNow::insert([
            'title'=>$request->title,
            'image_one'=>$imageone,
            'price'=>$request->price,
            'status'=>$request->status,
            'person'=>$request->person,
            'description'=>$request->description,
            'from_day'=>$request->from_day,
            'to_day'=>$request->to_day,
            'from_month'=>$request->from_month,
            'subtitle_per'=>$request->per,

            'to_month'=>$request->to_month,
        ]);


     toastr()->success('Data has been saved successfully!', 'Congrats');
     return  redirect()->route('BookContent');
    }


    // edit
    public function edit($id){
        $book = BookNow::find($id);
        return view('cms.book.edit',compact('book'));
    }


    
    public function update(Request $request,$id){
            $imageone = '';
        if ($request->hasFile('image_one')) {
            $photo1 = $request->file('image_one');
            $imageone = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo1->getClientOriginalName()
            );
            $photo1->move('assets/book/', $imageone);
              BookNow::where('id',$id)->update([   'image_one'=>$imageone,]);
        }

        BookNow::where('id',$id)->update([
         
            'title'=>$request->title,
            'price'=>$request->price,
            'status'=>$request->status,
            'description'=>$request->description,
            'person'=>$request->person,

            'from_day'=>$request->from_day,
            'to_day'=>$request->to_day,
            'from_month'=>$request->from_month,
            'to_month'=>$request->to_month,
              'subtitle_per'=>$request->per,
        ]);


     toastr()->success('Data has been saved successfully!', 'Congrats');
     return  redirect()->route('BookContent');
    }

    public function delete($id){
         BookNow::where('id',$id)->delete($id);
           toastr()->success('Data has been deleted successfully!', 'Congrats');
     return  redirect()->route('BookContent');
    }
    
}
