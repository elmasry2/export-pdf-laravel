<?php

namespace App\Http\Controllers;
use PDF;
//use Barryvdh\DomPDF\PDF;PDF
//use Dompdf\Adapter\PDFLib;
class exportPDFHTMLCSSController extends Controller
{
    public function index(){
        // your data here
        $data['title']            = 'Generated Report PDF HTML & CSS ';
        $data['main_title']       = 'Door To Door Campaign Database 2023 ';
        $data['small_watermark']  = 'https://royal-nursery.com/assets/website/images/logo.png';
        $data['center_watermark'] = 'https://royal-nursery.com/assets/website/images/logo.png';
        $data['left_image']       = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQytZbi7kITvTiF3O6mhRumcP5qD3p7kulmAQ&usqp=CAU';
        $data['right_image']      = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQytZbi7kITvTiF3O6mhRumcP5qD3p7kulmAQ&usqp=CAU';
        $data['users']=null;
        // passing data to blade
          $html = view('pdfHTMLCSS',compact('data'))->render();
            // load rendered data from pdf HTML View file and generate PDF fiel
        $pdf = PDF::loadHTML($html);

        // $pdf = PDF::loadView('invoice-pdf2');

        $pdf->setPaper('a4', '');
        $pdf->output();
        $canvas = $pdf->getCanvas();

      // Get height and width of page
        $w = $canvas->get_width();
        $h = $canvas->get_height();

      // Specify watermark image

        $imageURL = $data['center_watermark'];
        $imgWidth = 400;
        $imgHeight = 400;

      // Set image opacity

        $canvas->set_opacity(.2,"Multiply");

        $canvas->set_opacity(.2);
    // Specify horizontal and vertical position
        $x = (($w-$imgWidth)/2);
        $y = (($h-$imgHeight)/2);

    // Add an image to the pdf
//           $image=  $canvas->image($imageURL, $x, $y, $imgWidth, $imgHeight);

//        $canvas->page_text(20, 800, "Page {PAGE_NUM} of {PAGE_COUNT}", null, 10, array(0,0,0));
        // Add page numbers in footer of each page
//        $pdf->set_option("isPhpEnabled", true);

        //   // Repeat watermark on each page
            for($i=1; $i<=$pdf->get_canvas()->get_page_count(); $i++){
            $pdf->get_canvas()->page_text(20, 800, "Page {PAGE_NUM} of {PAGE_COUNT}", null, 10, array(0,0,0));
            // (xpos , ypos , width , height)
                     if($i < $pdf->get_canvas()->get_page_count())     {
                        $canvas->image($imageURL, $x, $y, $imgWidth, $imgHeight);
//                        $pdf->add_page();
                     }
            }
            // Output the PDF as a string   echo $dompdf->output();
//        $pdf->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf->setOption('watermark', 'Copyright My Company'); // Download PDF
       return $pdf->stream('invoice.pdf', array("Attachment" => 0));
     //        $pdf = PDF::loadView('invoice-pdf2');
     //        return $pdf->download('invoice-pdf2.pdf');

     //        return view('invoice',compact('data'));

    }
    public function index2()
    {

        $data['title']            ='Generated Report PDF HTML & CSS ';
        $data['main_title']       ='Door To Door Campaign Database 2023 ';
        $data['small_watermark']  = 'https://royal-nursery.com/assets/website/images/logo.png';
        $data['center_watermark'] = 'https://royal-nursery.com/assets/website/images/logo.png';
        $data['left_image']       = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQytZbi7kITvTiF3O6mhRumcP5qD3p7kulmAQ&usqp=CAU';
        $data['right_image']      = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQytZbi7kITvTiF3O6mhRumcP5qD3p7kulmAQ&usqp=CAU';
        $data['users']=null;
        $html = view('pdfHTMLCSS',compact('data'))->render();
        $pdf=PDF::loadHTML($html);
        return $pdf->stream('document.pdf');
}
}
