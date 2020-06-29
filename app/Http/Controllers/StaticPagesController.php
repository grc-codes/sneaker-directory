<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller {

    public function home() {
        return view('home');
    }

    public function collection() {
        return view('collection/collection-page');
    }

    public function product() {
        return view('product/product-page');
    }
}

?>