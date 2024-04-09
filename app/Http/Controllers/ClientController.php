<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required',
            'address'=>'required',
        ]);

        Client::create($validatedData);

        return redirect('dashboard')->with('success', 'Client successfully created');

    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('dashboard.client.edit',[
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $validatedData = $request->validate([
            'name'=>'required',
            'address'=>'required'
        ]);

        Client::where('id', $client->id)
                ->update($validatedData);

        return redirect('dashboard')->with('success', 'Client successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        Client::destroy($client->id);

        return redirect('dashboard')->with('success','Client successfully deleted.');
    }
}
