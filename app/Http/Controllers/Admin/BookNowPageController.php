<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookPage;
class BookNowPageController extends Controller
{
    //
    public function index(){
           $book = BookPage::where('id','1')->first();
        return view('cms.book_page',compact('book'));
    }


    public function update(Request $request){
         BookPage::where('id','1')->update([
        'page_title'=>$request->page_title,
        'page_subtitle'=>$request->page_subtitle,
       'page_titleDetail'=>$request->page_titleDetail,
        'page_subtitleDetail'=>$request->page_subtitleDetail,
      ]);
      toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('BookPage');

    }
    
}
