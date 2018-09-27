<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvoiceProduct;
use App\Invoice;

class InvoiceController extends Controller
{
    public function index() {
        $invoices = Invoice::orderBy('created_at', 'desc')
        ->paginate(10);
      
        return view('invoices.index', compact('invoices'));
    }

    public function create() {
        return view('invoices.create');
    }
}
