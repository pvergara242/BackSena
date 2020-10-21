<?php

namespace App\Http\Controllers;

use App\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
        setlocale(LC_TIME, 'es_ES');
        
        $this->middleware('auth');
    }
    
    public function index()
    {
        $clients = Client::latest()->paginate(4);
        return view('clients.index', compact('clients') );
    }

    public function create()
    {
        return view('clients.create', [
            'client' => new Client
        ]);
    }

    public function store(Request $request)
    {
        Client::create($request->validated() );
        return redirect()->route('cliente')->with('success', 'El CLIENTE ha sido agregado satisfactoriamente a la base de datos del sistema');
    }

    public function show($id)
    {
        return view('clients.show', [
            'client' => Client::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
