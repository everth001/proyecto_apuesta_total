<?php

namespace App\Http\Controllers;

use App\Models\Recarga;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRecargaRequest;
use App\Http\Requests\UpdateRecargaRequest;
use App\Models\Cliente;

class RecargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        return view('recarga.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recarga = Recarga::selectRaw('recarga_manuales.*,
            clientes.tipo_documento,
            clientes.numero_documento,
            clientes.nombres,
            clientes.apellidos,
            canales.tipo_canal,
            tipo_monedas.tipo_moneda')
            ->leftjoin('clientes', 'clientes.id', '=', 'recarga_manuales.cliente_id')
            ->leftjoin('canales', 'canales.id', '=', 'recarga_manuales.canal_id')
            ->leftjoin('tipo_monedas', 'tipo_monedas.id', '=', 'recarga_manuales.tipo_moneda_id')
            ->get();
        return response()->json($recarga);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $recarga = [
            'cliente_id' => $request->cliente_id,
            'canal_id' => $request->canal_id,
            'tipo_moneda_id' => $request->tipo_moneda_id,
            'monto' => $request->monto,
            'voucher' => $request->voucher
        ];
        Recarga::create($recarga);

        $cliente = Cliente::find($request->cliente_id);
        $cliente->saldo += $request->monto;
        $cliente->save();
        
        return response()->json([
            'status' => 200,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRecargaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecargaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recarga  $recarga
     * @return \Illuminate\Http\Response
     */
    public function show(Recarga $recarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recarga  $recarga
     * @return \Illuminate\Http\Response
     */
    public function edit(Recarga $recarga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecargaRequest  $request
     * @param  \App\Models\Recarga  $recarga
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecargaRequest $request, Recarga $recarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recarga  $recarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recarga $recarga)
    {
        //
    }
}
