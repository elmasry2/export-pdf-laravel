<?php

namespace App\Http\Controllers;
use PDF;

class ExportPDFDOMPDFController extends Controller
{

    public function index(){
        // your data here
        $data=null;
        $pdf = PDF::loadView('exportPDFDOMPDF',[
            'title'            => 'Generated PDF Using DOM PDF',
            'main_title'       => 'Door To Door Campaign Database 2023 ',
            'small_watermark'  => 'https://royal-nursery.com/assets/website/images/logo.png',
            'center_watermark' => 'https://royal-nursery.com/assets/website/images/logo.png',
            'left_image'       => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQytZbi7kITvTiF3O6mhRumcP5qD3p7kulmAQ&usqp=CAU',
            'right_image'      => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQytZbi7kITvTiF3O6mhRumcP5qD3p7kulmAQ&usqp=CAU',
            'data'             =>  null
        ]);
        return $pdf->download('exportPDFDOMPDF.pdf');
    }
}
