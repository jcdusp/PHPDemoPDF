<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class PdfController extends Controller
{
    public function generatepdf()
    {
        $data=[
            'title'=>"HID India Private Ltd",
             'date' => date("m/d/y"),
             
        ];
        $pdf = Pdf::loadView('generateuserdata', $data);
        return $pdf->download('generate-userdate.pdf');
        

    }
    function pdf_generator(Request $request)
    {
        echo "PDF"; die();
    }
    public function generateemailpdf()
    {
        $data["email"]="jayachandrane@gmail.com";
        $data["title"]="Demo Pdf Report";
        $data["body"]="This is Dome";
        
        $pdf=PDF::loadView('generateuserdata',$data);

        Mail::send('generateuserdata', $data, function($message)use($data,$pdf){
            $message->to($data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(),"test.pdf");
        });

        return redirect('/');

        
    }
}
