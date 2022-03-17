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
        return view('client-create');
    }

    public function store(StoreClientRequest $request)
    {
        $data = array_merge($request->validated(), ['user_id' => auth()->id()]);

        $path = $request->file('photo')->store('public/images');
        $data['photo'] = $path;

        Client::query()->create($data);

        return redirect()->route('dashboard');
    }

    public function show(Client $client)
    {
        //
    }
    public function edit(Client $client)
    {
        return view('client-edit', ['client' => $client]);
    }

    public function update(UpdateClientRequest $request, Client $client)
    {
        $data = array_merge($request->validated(), ['user_id' => auth()->id()]);

        if (isset($data['photo'])){
            $path = $request->file('photo')->store('public/images');
            $data['photo'] = $path;
        }

        $client->update($data);

        return redirect()->route('dashboard');
    }

    public function destroy(Client $client)
    {
        //
    }
}
