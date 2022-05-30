<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use Illuminate\Http\Request;

/**
 * Class DispositivoController
 * @package App\Http\Controllers
 */
class DispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispositivos = Dispositivo::paginate();

        return view('dispositivo.index', compact('dispositivos'))
            ->with('i', (request()->input('page', 1) - 1) * $dispositivos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dispositivo = new Dispositivo();
        return view('dispositivo.create', compact('dispositivo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Dispositivo::$rules);

        $dispositivo = Dispositivo::create($request->all());

        return redirect()->route('dispositivos.index')
            ->with('success', 'Dispositivo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dispositivo = Dispositivo::find($id);

        return view('dispositivo.show', compact('dispositivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dispositivo = Dispositivo::find($id);

        return view('dispositivo.edit', compact('dispositivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dispositivo $dispositivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dispositivo $dispositivo)
    {
        request()->validate(Dispositivo::$rules);

        $dispositivo->update($request->all());

        return redirect()->route('dispositivos.index')
            ->with('success', 'Dispositivo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dispositivo = Dispositivo::find($id)->delete();

        return redirect()->route('dispositivos.index')
            ->with('success', 'Dispositivo deleted successfully');
    }
}
