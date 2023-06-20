<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

   Route::get('/','PagesController@home')->name('home');
   Route::get('/le-luberon','PagesController@about')->name('le-luberon');
   Route::get('/gallery','PagesController@gallery')->name('gallery');
   Route::get('/practical-information','PagesController@particalInfo')->name('practicalinformation');
   Route::get('/how-to-arrive','PagesController@arrive')->name('howtoarrive');
   Route::get('/contact','PagesController@contact')->name('contact');
   Route::get('/book-now','PagesController@bookNow')->name('booknow');
   Route::get('/bookdetails/{id}/{price}','PagesController@booknowdetails')->name('booknowdetails');


Route::post('/contact', [ContactController::class, 'getContactForm'])->name('contact_path');

Auth::routes();

Route::get('/admin', 'Admin\DashboardController@index')->name('admin');
// Route::get('/admin', 'HomeController@index')->name('admin');
Route::namespace('Admin') ->prefix('admin') ->group(function () {
 
   ###################### Seo Page ####################################
   Route::get('/seo','AdminController@index')->name('seo');
   Route::post('/seo/store','AdminController@update')->name('adminSeo');

   ###################### Contact Page ####################################
    Route::get('/contactCms','ContactController@contactCms')->name('contactPage');
    Route::post('/contact/save','ContactController@contactUpdate')->name('contactSave');
    ###################### Settings Page ####################################
    Route::get('/settings','SettingsController@settings')->name('settings');
    Route::post('/settings/save','SettingsController@settingsSave')->name('settingsSave');
    
    ###################### slider Page ####################################
    Route::get('/sliders','SliderController@index')->name('slider');
    Route::get('/create-slider','SliderController@create')->name('sliderCreate');
    Route::post('/store-slider','SliderController@store')->name('sliderStore');
    Route::get('/edit-{id}-slider','SliderController@edit')->name('sliderEdit');
    Route::post('/update-{id}','SliderController@update')->name('sliderImageUpdate');
    Route::post('/delete-row/{id}','SliderController@delete')->name('deleteSlider');

    ###################### Gallery  ####################################
    Route::get('/gallery','GalleryController@index')->name('galleryImage');
    Route::get('create-gallery','GalleryController@create')->name('gallery_Create');
    Route::post('/store/gallery','GalleryController@store')->name('galleryStore');
    Route::get('/edit-{id}-gallery','GalleryController@edit')->name('galleryPageEdit');
    Route::post('/update/{id}','GalleryController@updateImage')->name('galleryUpdate');
    Route::post('/delete/{id}','GalleryController@delete')->name('galleryPageDelete');

    ###################### Service  ####################################
    Route::get('/services','ServicesController@index')->name('services');
    Route::get('/service-create','ServicesController@create')->name('serviceCreate');
    Route::get('/service-edit-{id}','ServicesController@edit')->name('serviceEdit');
    Route::post('/service-store','ServicesController@store')->name('serviceStore');
    Route::post('/service-update-{id}','ServicesController@update')->name('serviceUpdate');
    Route::post('/service-delete-{id}','ServicesController@delete')->name('serviceDelete');
    
    ###################### Gallery Page   ####################################
    Route::get('/gallery-page','GalleryPageController@gallery_page')->name('galleryPage');
    Route::post('/store-gallery','GalleryPageController@update')->name('galleryPageUpdate');
    ###################### Arrive Page ####################################
    Route::get('/how-to-arrive','HowToArriveController@index')->name('arrivePage');
    Route::post('/how-to-arrive/store','HowToArriveController@update')->name('arriveStore');

    ###################### Home Page ####################################
    Route::get('/home','HomeController@index')->name('HomePage');
    Route::post('/update','HomeController@update')->name('HomePagStore');
    ###################### About Page ####################################
    Route::get('/about','AboutController@index')->name('AboutPage');
    Route::post('/store','AboutController@update')->name('AboutPageStore');
   ###################### About Section 2 Page ####################################
   Route::get('/section-2','AboutSectionController@index')->name('sectionTwo');
   Route::get('/section-2-create','AboutSectionController@create')->name('sectionTwoCreate');
   Route::post('/section-2/store','AboutSectionController@store')->name('sectionTwoStore');
   Route::get('/section-2-edit-{id}','AboutSectionController@edit')->name('sectionTwoEdit');
   Route::post('/section-2/update/{id}','AboutSectionController@update')->name('sectionTwoUpdate');
   Route::post('/section-2/delete/{id}','AboutSectionController@delete')->name('sectionTwoDelete');

    ###################### Book Now Content Page ####################################
    Route::get('/bookNow','BookNowController@index')->name('BookContent');
    Route::get('/bookNow-create','BookNowController@create')->name('BookContentCreate');
    Route::post('/bookNow-store','BookNowController@store')->name('BookContentStore');
    Route::get('/bookNow-edit-{id}','BookNowController@edit')->name('BookContentEdit');
    Route::post('/bookNow-update-{id}','BookNowController@update')->name('BookContentUpdate');
    Route::post('/bookNow-delete-{id}','BookNowController@delete')->name('BookContentDelete');


    ###################### Book Now Page ####################################
    Route::get('/book-now','BookNowPageController@index')->name('BookPage');
    Route::post('/book-now/store','BookNowPageController@update')->name('storeBookPage');

     ###################### Practical Info Page ####################################
     Route::get('/practical-information','PracticalInfoController@index')->name('PracticalPage');
     Route::post('/practical/store','PracticalInfoController@update')->name('PracticalUpdate');


   ###################### Data Page ####################################
   Route::get('/data','BookingDataController@index')->name('dataBook');
   Route::post('/data-store','BookingDataController@sendRequest')->name('dataStore');
   Route::get('/data-edit-{id}','BookingDataController@edit')->name('dataEdit');
   Route::post('/data-pdf-{id}','BookingDataController@update')->name('dataUpdate');

   Route::get('generate-pdf-{id}','BookingDataController@generatePDF')->name('generatePdf');
   Route::get('send-pdf-{id}','BookingDataController@sendPDF')->name('sendPdf');
 

   
});