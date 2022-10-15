<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getPdf(){
        $qr = QrCode::size(300)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-8');

        $pdf = Pdf::loadView('car');
        $paper_size = array(0,0,1600,2260);
        $pdf->set_paper($paper_size);
        return $pdf->download('invoice.pdf');
    }
}
