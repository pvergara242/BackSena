<?php

namespace App\Http\Controllers;

use App\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

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

    public function store(ClientRequest $request)
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

    public function update(Request $request, $id)
    {
        $request->validate([
            'document' => 'required', 
            'name' => 'required', 
            'last_name' => 'required', 
            'surname' => 'required', 
            'last_surname' => 'required', 
            'type' => 'required', 
            'razon_social' => 'required', 
            'pais_code' => 'required', 
            'departamento_code' => 'required', 
            'municipio_code' => 'required', 
            'address' => 'required', 
            'phone' => 'required', 
            'email' => 'required',
        ]);

        $client = Client::find($id);
        $client->document = $request->get('document');
        $client->name = $request->get('name');
        $client->last_name = $request->get('last_name');
        $client->surname = $request->get('surname');
        $client->last_surname = $request->get('last_surname');
        $client->type = $request->get('type');
        $client->razon_social = $request->get('razon_social');
        $client->pais_code = $request->get('pais_code');
        $client->departamento_code = $request->get('departamento_code');
        $client->municipio_code = $request->get('municipio_code');
        $client->address = $request->get('address');
        $client->phone = $request->get('phone');
        $client->email = $request->get('email');

        return redirect()->route('cliente')->with('primary', 'El CLIENTE fue actaulizado en la base de datos correctamente.');
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();

        return redirect()->route('client')->with('danger', 'El CLIENTE ha sido eliminado de la base de datos del sistema');
    }
}
