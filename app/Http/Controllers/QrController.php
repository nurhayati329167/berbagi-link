<?php

namespace App\Http\Controllers;
// use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Users;

use Illuminate\Http\Request;

class QrController extends Controller
{
    // public function qrcode(){
    //     // $data['qrcode'] = QrCode::generate('Welcome to Makitweb');
    //     $data = Users::all();
    //     $qrcode = QrCode::size(400)->generate($data->url);
    //     return view('ubahtampilan.qrcode',compact('qrcode'));
    // }

    public function generateqr ($id)
    {
        $data = Users::findOrFail($id);
        // $qrcode = QrCode::size(400)->generate($data->name);
        return view('ubahtampilan.qrcode');
    }
    // public function generate ($id)
    // {
    //     $data = Users::findOrFail($id);
    //     $qrcode = QrCode::size(400)->generate($data->name);
    //     return view('qrcode',compact('qrcode'));
    // }

}
