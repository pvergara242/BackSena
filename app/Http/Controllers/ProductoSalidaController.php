<?php

namespace App\Http\Controllers;

use App\ProductoSalida;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoSalidaRequest;

class ProductoSalidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $entregaProductos = ProductoSalida::latest()->paginate(4);
        return view('entregaProductos.index', compact('entregaProductos') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entregaProductos.create', [
            'entregaProductos' => new ProductoSalida
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalidaProductoCreateRequest $request)
    {
        ProductoSalida::create($request->validated() );
        return redirect()->route('entregaProductos')->with('success', 'la entrega del producto ha sido entregado satisfactoriamente ');
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
            'entregaProductos' => ProductoSalida::findOrFail($id)
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
        $entregaProductos = ProductoSalida::find($id);
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
        $productoSalida = ProductoSalida::find($id);
        $productoSalida->fechaSolicitud = $request->get('fechaSolicitud');
        $productoSalida->area = $request->get('area');
        $productoSalida->codigoRegional = $request->get('codigoRegional');
        $productoSalida->nombreRegional = $request->get('nombreRegional');
        $productoSalida->codigoCentroCostos = $request->get('codigoCentroCostos ');
        $productoSalida->nombreCentroCostos = $request->get('nombreCentroCostos');
        $productoSalida->cordinadorArea = $request->get('cordinadorArea');
        $productoSalida->numeroDocumento = $request->get('numeroDocumento');
        $productoSalida->nombreServidorPublico = $request->get('nombreServidorPublico');
        $productoSalida->numeroDocumentoServidor = $request->get('numeroDocumentoServidor');
        $productoSalida->codigoFichaCaracterizacion = $request->get('codigoFichaCaracterizacion');
        $productoSalida->codigoSena = $request->get('codigoSena');
        $productoSalida->descripcionBien = $request->get('descripcionBien');
        $productoSalida->unidadMedida = $request->get('unidadMedida');
        $productoSalida->cantidadSolicitada = $request->get('cantidadSolicitada');
        $productoSalida->observaciones = $request->get('observaciones');
        $productoSalida->nombre = $request->get('nombre');
        $productoSalida->cargo = $request->get('cargo');

        $productoSalida->save();

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
        $productoSalida = ProductoSalida::find($id);
        $productoSalida->delete();

        return redirect()->route('entregaProductos')->with('danger', 'La entrega del producto ha sido eliminada correctamente.');
    }
}
