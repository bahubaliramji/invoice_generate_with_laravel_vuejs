<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InvoiceItem;

class InvoiceController extends Controller
{
    //
    public function getAllInvoices(){
        $invoices = Invoice::with('customer')->orderBy('id','DESC')->get();
        return response()->json([
            'invoices' => $invoices
        ],200);
    }

    public function searchInvoice(Request $request){
        $search = $request->get('s');
        if($search != null){
            $invoices = Invoice::with('customer')
            ->where('id','LIKE',"%$search%")
            ->orderBy('id','DESC')->get();
            return response()->json([
                'invoices' => $invoices
            ],200);
        } else {
            return $this->getAllInvoices();
        }
    }
    public function createInvoice(){
        $counter = Counter::where('key','invoice')->first();
        $invoice = Invoice::orderBy('id','DESC')->first();
        if($invoice){
            $invoice = $invoice->id+1;
            $counters = $counter->value + $invoice;
        } else {
            $counters = $counter->value;
        }
        $formData = [
            'number' => $counter->prefix.$counters,
            'customer_id' => null,
            'customer' => null,
            'date' => date('Y-m-d'),
            'deu_date' => null,
            'reference' => null,
            'discount' => null,
            'term_and_conditions' => 'Default Terms and Conditions',
            'items' => [
                [
                    'product_id' => null,
                    'product' => null,
                    'unit_price' => 0,
                    'quantity' => 1

                ]
            ]
        ];
        return response()->json($formData,200);
    }

    public function addInvoice(Request $request){
        $invoiceitem = $request->input("invoice_item");

        $invoicedata['sub_total'] = $request->input('subTotal');
        $invoicedata['total'] = $request->input('total');
        $invoicedata['customer_id'] = $request->input('customer_id');
        $invoicedata['number'] = $request->input('number');
        $invoicedata['date'] = $request->input('date');
        $invoicedata['due_date'] = $request->input('due_date');
        $invoicedata['discount'] = $request->input('discount');
        $invoicedata['reference'] = $request->input('reference');
        $invoicedata['term_and_conditions'] = $request->input('term_and_conditions');
        $invoicedata['discount'] = $request->input('discount');

        $invoice = Invoice::create($invoicedata);

        foreach(json_decode($invoiceitem) as $item){
            $itemdata['product_id'] = $item->id;
            $itemdata['invoice_id'] = $invoice->id;
            $itemdata['quantity'] = $item->quantity;
            $itemdata['unit_price'] = $item->unit_price;
            InvoiceItem::create($itemdata);
        }
    }

    public function showInvoice($id){
        $invoice = Invoice::with(['customer','invoice_items.product'])->find($id);
        return response()->json([
            'invoice' => $invoice
        ],200);
    }

    public function editInvoice($id){
        $invoice = Invoice::with(['customer','invoice_items.product'])->find($id);
        return response()->json([
            'invoice' => $invoice
        ],200);
    }
    public function deleteInvoiceItems($id){
        $invoiceItem = InvoiceItem::findOrFail($id);
        $invoiceItem->delete();
    }

    public function updateInvoice(Request $request,$id){

        $invoice = Invoice::find($id);
        $invoice->sub_total = $request->input('subTotal');
        $invoice->total = $request->input('total');
        $invoice->customer_id = $request->input('customer_id');
        $invoice->number = $request->input('number');
        $invoice->date = $request->input('date');
        $invoice->due_date = $request->input('due_date');
        $invoice->discount = $request->input('discount');
        $invoice->reference = $request->input('reference');
        $invoice->term_and_conditions = $request->input('term_and_conditions');
        $invoice->discount = $request->input('discount');
        $invoice->save();

        $invoiceitem = $request->input("invoice_item");

        foreach(json_decode($invoiceitem) as $item){
            $itemdata1['product_id'] = $item->product_id;
            $itemdata1['invoice_id'] = $invoice->id;
            $itemdata['quantity'] = $item->quantity;
            $itemdata['unit_price'] = $item->unit_price;
            InvoiceItem::updateOrCreate($itemdata1,$itemdata);
        }
    }
    public function deleteInvoice($id){

        $invoice = Invoice::findOrFail($id);
        $invoice->invoice_items()->delete();
        $invoice->delete();
    }
}
