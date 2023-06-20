<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderImage;
use App\Home;
use App\About;
use App\Slider;
use App\Contact;
use App\HowToArrive;
use App\practicalinformation;
use App\Service;
use App\GalleryPage;
use App\Gallery;
use App\BookPage;
use App\BookNow;
use App\Settings;
use App\AboutSection2;
use SEO;
use SEOMeta;
use Mail;
use App\Page;

class PagesController extends Controller
{
    //

    public function __construct()
    {
        app()->singleton('contact', function(){
            $settings = Settings::where('id','1')->get();
            return $settings[0];
        });
    }
    
    public function setSeo($page_data)
    {
        //get url of the page
        $url = url()->current();

        SEO::setTitle($page_data->meta_title, false);
        SEO::setDescription($page_data->meta_description, false);
        SEOMeta::setKeywords($page_data->meta_keywords, false);
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type','article');  
        SEO::twitter()->setSite('@'.app('contact')->twitter);

        if($page_data->image != NULL) // check if we have an OG image
            SEO::addImages(getenv('APP_URL').'/assets/seo/'.$page_data->image); 
    }


    public function home(){
         $page_data = Page::where('id','1')->get();
        $this->setSeo($page_data[0]);
        
        $sliders = Slider::all();
        $home = Home::where('id','1')->get();
        return view('welcome',compact('sliders','home','page_data'));
    }

    // about

    public function about(){
        $about = About::where('id','1')->get();
        $sections = AboutSection2::all();
        return view('leluberon',compact('about','sections'));

    }

    // 
    public function contact(){
        $contact =  Contact::where('id','1')->get();
        return view('contact',compact('contact'));
                
    }

    // gallery 
    public function gallery(){
        $images= Gallery::all();
        $data= GalleryPage::where('id','1')->get();
        return view('gallery',compact('images','data'));
    }



    // partical Info
    public function particalInfo(){
        $info = PracticalInformation::where('id','1')->get();
        $services = Service::all();
        return view('practicalinformation',compact('info','services'));
    }

    //   how to arrive page
    public function arrive(){
        $arrive =    HowToArrive::where('id','1')->get();
        return view('howtoarrive',compact('arrive'));

    }

    public function bookNow(){
        $book = BookNow::all();
        $data= BookPage::where('id','1')->get();
        return view('booknow', compact('book','data'));
    }

    public function booknowdetails($id,$price){
;
        $data= BookPage::where('id','1')->get();
        $details= BookNow::where('id',$id)->get();
        // dd( $details);
        return view('booknowdetails', compact('details','data'));


    }
}
