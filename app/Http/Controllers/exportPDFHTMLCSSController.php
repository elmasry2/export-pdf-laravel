<?php

namespace App\Http\Controllers;
use PDF;

class exportPDFHTMLCSSController extends Controller
{
    public function index(){
        // your data here
        $data['title']='Generated Report PDF HTML & CSS ';
        $data['main_title']='Door To Door Campaign Database 2023 ';
        $data['small_watermark']  = 'https://royal-nursery.com/assets/website/images/logo.png';
        $data['center_watermark'] = 'https://royal-nursery.com/assets/website/images/logo.png';
        $data['left_image'] = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQytZbi7kITvTiF3O6mhRumcP5qD3p7kulmAQ&usqp=CAU';
        $data['right_image'] = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQytZbi7kITvTiF3O6mhRumcP5qD3p7kulmAQ&usqp=CAU';
        $data['users']=null;
        // passing data to blade
         return $html = view('pdfHTMLCSS',compact('data'))->render();
            // load rendered data from pdf HTML View file and generate PDF fiel
//        $pdf = PDF::loadHTML($html);
//        return $pdf
////            ->setPaper('a4', 'portrait')
//            ->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif'])
//            ->setWarnings(false)
//            ->download('invoice.pdf');
//        $pdf = PDF::loadView('invoice-pdf2');
//        return $pdf->download('invoice-pdf2.pdf');

//        return view('invoice',compact('data'));

    }
}
