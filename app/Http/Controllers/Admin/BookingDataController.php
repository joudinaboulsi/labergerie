<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\DataBooking;
use Auth;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;

class BookingDataController extends Controller
{
    //index 
    public function index(){
        $data = DataBooking::all();
        return view('cms.booking_data.index',compact('data',['data'=>$data]));
    }

    // sending email plus data to admin
    public function sendRequest(Request $request){
        //   return $request;
      $name = $request->input('name');
      $email = $request->input('email');
      $phone = $request->input('phone');
      $end = $request->input('end');
      $start = $request->input('start');
      $price= $request->price;


     $data = request()->except(['_token']);

    //    dd($data);
     
          Mail::send('emails.data', array('name' => $name, 'email' => $email, 'phone' => $phone,
           'start'=>$start,'end'=>$end,'price'=>$price), function($message) use ($email, $name)
          {
              $message->from($email, $name);
              $message->to(Auth::user()->email)->subject('Message from Website');
          });
        
          $pdf = PDF::loadView('cms.pdfData', compact('data'));
 
         $filePath = 'contract_' . time() . '.pdf';
         $file=  Storage::disk('public')->put($filePath, $pdf->output());
     
         DataBooking::insert([
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'price'=>$price,
            'start'=>$start,
            'end'=>$end,
            'pdf_file'=>$filePath
         ]);
         
        \Session::flash('msg', 'Successfully sent!' );
         return redirect()->back();
    }

     // edit
      public function edit($id)
      {
          $data = DataBooking::find($id);
          return view('cms.booking_data.edit', compact('data'));
      }
    

      public function update(Request $request,$id){
        
      DataBooking::where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'price'=>$request->price,
            'start'=>$request->start,
            'end'=>$request->end,
        ]);

        $data= DataBooking::where('id',$id)->first();
         $pdf = PDF::loadView('cms.pdfData', compact('data'));
 
         $filePath = 'contract_' . time() . '.pdf';
        
          $file=  Storage::disk('public')->put($filePath, $pdf->output());
         
            $data->update(['pdf_file'=>$filePath]);


        toastr()->success('Data has been saved successfully!', 'Congrats');
            return  redirect()->route('dataBook');
      }

    // generate Pdf
    public function generatePDF($id){
    
        $data =DataBooking::where('id',$id)->first();
    
        $html = view('cms.pdfData', compact('data'))->render();
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        return $dompdf->stream('document.pdf',array('Attachment'=>0)); 
   
    
    }


   //  send Pdf By email 
    public function sendPDF(Request $request,$id){
    
        $data =DataBooking::where('id',$id)->first();
        $email= $data->email;

         // Generate the PDF from the view

         $pdf = PDF::loadView('emails.pdf_mail', compact('data'));

        Mail::send('emails.pdf_mail', array($data), function ($message) use ($data, $pdf) {
                  $message->from('Message from Website');
                    $message->to($email)
                        ->subject('contract')
                        ->attachData($pdf->output(), "contract.pdf");
        });

         \Session::flash('msg', 'Successfully sent!' );
        return redirect()->back();
    }
 
}
