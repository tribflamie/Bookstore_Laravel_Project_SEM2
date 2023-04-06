<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //return view overview
    public function overview()
    {
        return view('admin.overview');
    }

    //return view user-tables
    public function userTables(){
        return view('admin.user-tables');
    }

    //return view product-tables
    public function productTables()
    {
        return view('admin.product-tables');
    }

    //return view oder-tables
    public function oderTables()
    {
        return view('admin.oder-tables');
    }

    //return view feedback-tables
    public function feedbackTables()
    {
        return view('admin.feedback-tables');
    }
}
