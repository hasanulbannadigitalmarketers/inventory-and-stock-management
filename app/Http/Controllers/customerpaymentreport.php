<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\customerpaymentList;
use App\Http\Controllers\Controller;

class customerpaymentreport extends Controller
{
    public function index(){
        $customer=customerpaymentList::all();
        return view('admin.customerPaymentReports.index', compact('customer'));
    }
}
