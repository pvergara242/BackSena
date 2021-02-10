<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntregaProductosRequest;
use App\ProductoSalida;
use Illuminate\Http\Request;

class ProductoSalidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('entregaProductos.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entregaProductos.create', [
            'entregaProductos' => new EntregaProductosRequest()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        EntregaProductosRequest::create($request->validated() );
        return redirect()->route('entregaProductos')->with('success', 'El producto ha sido entregado satisfactoriamente ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductoSalida  $productoSalida
     * @return \Illuminate\Http\Response
     */
    public function show(ProductoSalida $productoSalida)
    {
        return view('entregaProductos.show', [
            'entregaProductos' => EntregaProductosRequest::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductoSalida  $productoSalida
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductoSalida $productoSalida)
    {
        $entregaProductos = EntregaProductosRequest::find($id);
        return view('entregaProductos.edit', compact('entregaProductos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductoSalida  $productoSalida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductoSalida $productoSalida)
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
        $EntregaProductos = EntregaProductosRequest::find($id);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductoSalida  $productoSalida
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductoSalida $productoSalida)
    {
        $EntregaProductos = EntregaProductosRequest::find($id);
        $EntregaProductos->delete();

        return redirect()->route('entregaProductos')->with('danger', 'La entrega del producto ha sido eliminada correctamente.');
    }
}
