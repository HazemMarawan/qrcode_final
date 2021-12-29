<?php

namespace App\Http\Controllers;

use App\qrcode;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function index()
    {
        return view('qrcode.index');
    }

    public function GenerateQrCode(Request $request)
    {
       
        $qrcodes = [];
        if ($request->qr_code_number != 0) {
            for ($i = 1; $i <= $request->qr_code_number; $i++) {
                $qrCode = new qrcode();
                $qrCode->qrcode_key = md5(uniqid());
                $qrCode->checked = 0;
                $qrCode->save();
                $qrcodes[] = $qrCode;
            }
        }
        return view('qrcode.generate', compact('qrcodes'));
    }

    public function CheckQrCode($qrCodeKey)
    {
        $qrCodeStatus = 0;
        $qrCode = qrcode::where('qrcode_key',$qrCodeKey)->first();
        if(!empty($qrCode))
        {
            if($qrCode->checked == 0)
            {
                $qrCodeStatus = 2;
                $qrCode->checked = 1;
                $qrCode->save();
            }
            else
            {
                $qrCodeStatus = 1;
            }
            

        }
       
        return view('qrcode.check', compact('qrCodeStatus'));
    }
}
