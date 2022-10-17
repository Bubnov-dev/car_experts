<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getPdf() {
        $qr = QrCode::size(300)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-8');

        $pdf = Pdf::loadView('car');
        $paper_size = [0.0, 0.0, 1340.78, 2200.94];
        $pdf->set_paper($paper_size);
        return $pdf->download('invoice.pdf');
    }

    public function newInvoice(Request $request) {
        Log::info($request->all());
    }
}
