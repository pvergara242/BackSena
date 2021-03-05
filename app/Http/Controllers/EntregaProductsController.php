<?php

namespace App\Http\Controllers;

use App\EntregaProducts;
use Illuminate\Http\Request;
use App\Http\Requests\EntregaProductsRequest;

class EntregaProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entregaProductos = EntregaProducts::latest()->paginate(6);
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
            'entregaProductos' => new EntregaProducts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntregaProductsRequest $request)
    {
        EntregaProducts::create($request->validated() );
        return redirect()->route('entregaProductos')->with('success', 'El producto ha sido entregado satisfactoriamente ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EntregaProducts  $entregaProducts
     * @return \Illuminate\Http\Response
     */
    public function show(EntregaProducts $entregaProducts)
    {
        return view('entregaProductos.show', [
            'EntregaProducts' => EntregaProducts::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EntregaProducts  $entregaProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(EntregaProducts $entregaProducts)
    {
        $entregaProductos = EntregaProducts::find($id);
        return view('entregaProductos.edit', compact('entregaProductos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EntregaProducts  $entregaProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntregaProducts $entregaProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EntregaProducts  $entregaProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntregaProducts $entregaProducts)
    {
        //
    }
}
