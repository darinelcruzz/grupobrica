<?php

namespace App\Http\Controllers\Runa;

use App\Models\Runa\RClient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function index()
    {
        $clients = RClient::all();
        return view('runa.clients.index', compact('clients'));
    }

    function create()
    {
        return view('runa.clients.create');
    }

    function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $client = RClient::create($request->all());

        return redirect(route('runa.client.index'));
    }

    function show(RClient $rClient)
    {
        //
    }

    function edit(RClient $rClient)
    {
        return view('runa.clients.edit', compact('rClient'));
    }

    function update(Request $request, RClient $rClient)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $rClient->update($request->all());

        return redirect(route('runa.client.index'));
    }

    function destroy(RClient $rClient)
    {
        $rClient->delete();

        return redirect(route('runa.client.index'));
    }
}