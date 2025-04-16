<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $products = Product::all();
    
        $data = [
            'title' => 'Products List',
            'date' => date('m/d/Y'),
            'products' =>  $products
        ]; 
              
        $pdf = PDF::loadView('myPDF', $data);
       
        return $pdf->download('productsList.pdf');
    }
}
