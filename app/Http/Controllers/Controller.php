<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
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

    public function index(Request $request){
        $invoice = Invoice::where('id', $request->id)->first();
        if(!$invoice){
            abort(404);
        }
        return view('welcome', ['invoice' => $invoice]);
    }
    public function car(Request $request){
        $invoice = Invoice::where('id', $request->id)->first();
        return view('car', ['invoice' => $invoice]);
    }

    public function getPdf(Request $request) {
        $invoice = Invoice::where('id', $request->id)->first();
        if(!$invoice){
            abort(404);
        }
        $contxt = stream_context_create([
                                            'ssl' => [
                                                'verify_peer' => FALSE,
                                                'verify_peer_name' => FALSE,
                                                'allow_self_signed' => TRUE,
                                            ]
                                        ]);

        $pdf = Pdf::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf->getDomPDF()->setHttpContext($contxt);
        $pdf->loadView('car', ['invoice' => $invoice]);
//        $pdf->output();
//        $canvas = $pdf ->get_canvas();
//        $canvas->page_text(1550, 2250, "стр. {PAGE_NUM}", null, 16,
//            array(0, 0, 0));
        $paper_size = [0.0, 0.0, 1600, 2265];
        $pdf->set_paper($paper_size);
        return $pdf->download('Inspection report by CAR Experts - '.$invoice->brand . ' ' . $invoice->model
            .' - '.date_create($invoice->updated_at)->format('d-m-Y').'.pdf');
    }

}
