<?php

namespace App\Http\Controllers;

use App\EntregaProducts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\EntregaProductosRequest;

class EntregaProductController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
        setlocale(LC_TIME, 'es_ES');
        
        $this->middleware('auth');
    }

    public function index()
    {
        // $entregaProductos = EntregaProducts::latest()->paginate(6);
        // return view('entregaProductos.index', compact('entregaProductos') );
        return "hola";
    }

    public function create()
    {
        return view('entregaProductos.create', [
            'entregaProductos' => new EntregaProducts
        ]);
    }

    public function store(EntregaProductosRequest $request)
    {
        EntregaProducts::create($request->validated() );
        return redirect()->route('entregaProductos')->with('success', 'El producto ha sido entregado satisfactoriamente ');
    }

    public function show($id)
    {
        return view('entregaProductos.show', [
            'entregaProductos' => EntregaProducts::findOrFail($id)
        ]);
    }
    public function edit($id)
    {
        $entregaProductos = EntregaProducts::find($id);
        return view('entregaProductos.edit', compact('entregaProductos'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'fechaSolicitud' => 'required',
            'area'  => 'required',
            'codigoRegional' => 'required',
            'nombreRegional' => 'required',
            'codigoCentroCostos' => 'required',
            'nombreCentroCostos' => 'required',
            'cordinadorArea' => 'required',
            'numeroDocumento' => 'required',
            'nombreServidorPublico' => 'required',
            'numeroDocumentoServidor' => 'required',
            'codigoFichaCaracterizacion' => 'required',
            'codigoSena' => 'required',
            'descripcionBien' => 'required',
            'unidadMedida' => 'required',
            'cantidadSolicitada' => 'required',
            'cantidadEntregada' => 'required',
            'observaciones' => 'required',
            'nombre' => 'required',
            'cargo' => 'required',

        ]);

        $EntregaProductos = EntregaProducts::find($id);
        $EntregaProductos->fechaSolicitud = $request->get('fechaSolicitud');
        $EntregaProductos->area = $request->get('area');
        $EntregaProductos->codigoRegional = $request->get('codigoRegional');
        $EntregaProductos->nombreRegional = $request->get('nombreRegional');
        $EntregaProductos->codigoCentroCostos = $request->get('codigoCentroCostos ');
        $EntregaProductos->nombreCentroCostos = $request->get('nombreCentroCostos');
        $EntregaProductos->cordinadorArea = $request->get('cordinadorArea');
        $EntregaProductos->numeroDocumento = $request->get('numeroDocumento');
        $EntregaProductos->nombreServidorPublico = $request->get('nombreServidorPublico');
        $EntregaProductos->numeroDocumentoServidor = $request->get('numeroDocumentoServidor');
        $EntregaProductos->codigoFichaCaracterizacion = $request->get('codigoFichaCaracterizacion');
        $EntregaProductos->codigoSena = $request->get('codigoSena');
        $EntregaProductos->descripcionBien = $request->get('descripcionBien');
        $EntregaProductos->unidadMedida = $request->get('unidadMedida');
        $EntregaProductos->cantidadSolicitada = $request->get('cantidadSolicitada');
        $EntregaProductos->observaciones = $request->get('observaciones');
        $EntregaProductos->nombre = $request->get('nombre');
        $EntregaProductos->cargo = $request->get('cargo');

        $EntregaProductos->save();

        return redirect()->route('entregaProductos')->with('primary', 'La entrega del producto fue actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $EntregaProductos = EntregaProducts::find($id);
        $EntregaProductos->delete();

        return redirect()->route('entregaproductos')->with('danger', 'La entrega del producto ha sido eliminada correctamente.');
    }
}
