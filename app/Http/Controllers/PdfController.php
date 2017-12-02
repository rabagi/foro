<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function pdf(){
        
        $pdf = PDF::loadView('pdf.pdf');
        
        return $pdf->stream('test.pdf');

    }
    
    
    function getView ($file, $data=NULL) {
        if (!empty($data)) extract($data);
        ob_start();
        if (is_file($file)) include($file);
        return ob_get_clean();
    }
}
