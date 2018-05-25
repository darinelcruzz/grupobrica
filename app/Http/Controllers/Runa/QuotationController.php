<?php

namespace App\Http\Controllers\Runa;

use App\Models\Runa\RClient;
use App\Http\Controllers\Controller;
use App\Models\Runa\RQuotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    function index()
    {
        $quotations = RQuotation::all();
        return view('runa.quotations.index', compact('quotations'));
    }

    function create($type)
    {
        $clients = RClient::pluck('name', 'id')->toArray();
        $lastQ = RQuotation::all()->last();
        return view('runa.quotations.create', compact('clients', 'type', 'lastQ'));
    }

    function store(Request $request, $type)
    {
        $validated = $this->validate($request, [
            'r_client_id' => 'required',
            'description' => 'required',
            'delivered_at' => 'required',
            'retainer' => 'sometimes|required',
            'amount' => 'sometimes|required',
        ]);

        $lastQ = RQuotation::all()->last();

        $quotation = RQuotation::create($validated);

        $quotation->update([
            'type' => $type,
            'folio' => $lastQ ? $lastQ->folio + 1: 1
        ]);

        if (!$type) $quotation->storeProducts($request);

        return redirect(route('runa.quotation.index'));
    }

    function print(RQuotation $rQuotation)
    {
        return view('runa.quotations.print', compact('rQuotation'));
    }

    function edit(RQuotation $rQuotation)
    {
        //
    }

    function update(Request $request, RQuotation $rQuotation)
    {
        //
    }

    function destroy(RQuotation $rQuotation)
    {
        //
    }
}