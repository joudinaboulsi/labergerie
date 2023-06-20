<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
class PdfContractController extends Controller
{
    //

public function pdfFormSubmit(Request $request,$id)
{
  // Your form submission logic goes here

  // Generate the PDF file
  $pdf = PDF::loadView('cms.pdf_form')->setPaper('a4', 'portrait');
   $book=  BookNow::find($id);
  // Return the PDF file as a response
  return $pdf->stream('pdf_form.pdf',compact('book'));
}


}