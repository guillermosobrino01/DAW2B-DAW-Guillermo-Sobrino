<?php

namespace App\Http\Controllers;

use App\Http\Requests\CuadroRequest;
use App\Models\Cuadro;
use App\Models\Pintor;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class CuadrosController extends Controller
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
    public function crear()
    {
        $pintores = Pintor::all();
        return view('cuadros.crear', compact('pintores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CuadroRequest $request)
    {
        $nombre = $request->nombreCuadro;
        $pintor_id = $request->pintor_id;

        $cuadro = new Cuadro();
        $cuadro->nombre = $nombre;
        $cuadro->pintor_id = $pintor_id;

        if($request->hasFile('imagen')){
            $cuadro->imagen = $request->imagen->store('', 'cuadros');
        }

        $cuadro->save();

        return redirect()->route('pintores.mostrar', $cuadro->pintor);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function cambiarEstado(Cuadro $cuadro){
        if ($cuadro->disponible) {

            $cuadro->disponible = false;

        } else {
            $cuadro->disponible = true;
        }

        $cuadro->save();

        return redirect()->route('pintores.mostrar', $cuadro->pintor);
    }
}
