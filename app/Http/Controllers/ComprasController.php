<?php

namespace App\Http\Controllers;

use App\Compras;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\ComprasRequest;

class ComprasController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
        setlocale(LC_TIME, 'es_ES');
        
        $this->middleware('auth');
    }

    public function index()
    {
        $compras = Compras::latest()->paginate(6);
        return view('compras.index', compact('compras') );
    }

    public function create()
    {
        return view('compras.create', [
            'Compras' => new Compras
        ]);
    }

    public function store(ComprasRequest $request)
    {
        Compras::create($request->validated() );
        return redirect()->route('compras')->with('success', 'La compra ha sido agregado satisfactoriamente ');
    }

    public function show($id)
    {
        return view('compras.show', [
            'Compras' => Compras::findOrFail($id)
        ]);
    }
    public function edit($id)
    {
        $compras = Compras::find($id);
        return view('compras.edit', compact('Compra'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'CodigoComprobante' => 'required',
            'numeroFactura' => 'required',
            'DetalleGeneral' => 'required',
            'FechaCompra' => 'required',
            'CodigoTercero' => 'required',
            'nombreTercero' => 'required',
            'codigoProducto' => 'required',
            'nombreProducto' => 'required',
            'Cantidades' => 'required',
            'unidadesDisponibles' => 'required',
            'CostoUnitarioCompra' => 'required',
            'CostoTotalCompra' => 'required',
            'Referencia' => 'required',
            'Presentacion' => 'required',
            'Impuestos' => 'required',
            'Porcentajeimpuesto' => 'required',
            'TotalImpuestos' => 'required',
            'RetencionFuente' => 'required',
            'TiempoReposicion' => 'required',
            'PorcentajeRetefte' => 'required',
            'TotalRetenciónFuente' => 'required',
        ]);

        $Compras = Compras::find($id);
        $Compras->CodigoComprobante = $request->get('CodigoComprobante');
        $Compras->numeroFactura = $request->get('numeroFactura');
        $Compras->CantidadProducto = $request->get('CantidadProducto');
        $Compras->DetalleGeneral = $request->get('DetalleGeneral');
        $Compras->FechaCompra = $request->get('FechaCompra');
        $Compras->CodigoTercero = $request->get('CodigoTercero');
        $Compras->nombreTercero = $request->get('nombreTercero');
        $Compras->codigoProducto = $request->get('codigoProducto');
        $Compras->Cantidades = $request->get('Cantidades');
        $Compras->unidadesDisponibles = $request->get('unidadesDisponibles');
        $Compras->CostoUnitarioCompra = $request->get('CostoUnitarioCompra');
        $Compras->Referencia = $request->get('Referencia');
        $Compras->Presentacion = $request->get('Presentacion');
        $Compras->Impuestos = $request->get('Impuestos');
        $Compras->Porcentajeimpuesto = $request->get('Porcentajeimpuesto');
        $Compras->RetencionFuente = $request->get('RetencionFuente');
        $Compras->PorcentajeRetefte = $request->get('PorcentajeRetefte');
        $Compras->TotalRetenciónFuente = $request->get('TotalRetenciónFuente');
        $Compras->save();

        return redirect()->route('compra')->with('primary', 'la compra fue actualizada correctamente.');
    }

    public function destroy($id)
    {
        $Compras = Compras::find($id);
        $Compras->delete();

        return redirect()->route('compra')->with('danger', 'la compra ha sido eliminado correctamente');
    }
}
