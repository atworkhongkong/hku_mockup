<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function search(Request $request)
    {
        $invoice_id = $request->get('invoice_id');
        return redirect('/ecs/invoice/'.$invoice_id);
    }

    public function show($invoice_id)
    {
        return view('ECS.invoice.show', compact('invoice_id'));
    }
}
