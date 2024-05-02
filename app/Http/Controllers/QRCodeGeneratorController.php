<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeGeneratorController extends Controller
{

    public function generateQrCode(Request $request){
        $request->validate([
            'link' => 'required', // Ensure 'link' is required and a valid URL
        ]);
        $url = $request->input('link');
        $qrCode = QrCode::size(200)->generate($url);
        if(empty($qrCode)){
            return "Please enter a valid url";
        }else{
            return view('qr-code',compact('qrCode'));
        }
    }//end method
    public function index(){
        return view('qr-code-input');
    }

}
