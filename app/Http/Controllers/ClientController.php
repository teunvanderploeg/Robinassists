<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;

class ClientController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('');
    }

    public function store(StoreClientRequest $request)
    {
        //
    }

    public function show(Client $client)
    {
        //
    }
    public function edit(Client $client)
    {
        //
    }

    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    public function destroy(Client $client)
    {
        //
    }
}
