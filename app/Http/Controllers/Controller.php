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
        return view('welcome', ['invoice' => $invoice]);
    }
    public function car(Request $request){
        $invoice = Invoice::where('id', $request->id)->first();
        return view('car', ['invoice' => $invoice]);
    }

    public function getPdf(Request $request) {
        $invoice = Invoice::where('id', $request->id)->first();
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
        $paper_size = [0.0, 0.0, 1340.78, 2400.94];
        $pdf->set_paper($paper_size);
        return $pdf->download('invoice.pdf');
    }

    public function newInvoice(Request $request) {
        Log::info($request->all());

        return response()->json('cool');
    }
}
