<?php

namespace App\Http\Controllers;

use App\Models\Nodo;
use Illuminate\Http\Request;

/**
 * Class NodoController
 * @package App\Http\Controllers
 */
class NodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nodos = Nodo::paginate();

        return view('nodo.index', compact('nodos'))
            ->with('i', (request()->input('page', 1) - 1) * $nodos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nodo = new Nodo();
        return view('nodo.create', compact('nodo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Nodo::$rules);

        $nodo = Nodo::create($request->all());

        return redirect()->route('nodos.index')
            ->with('success', 'Nodo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nodo = Nodo::find($id);

        return view('nodo.show', compact('nodo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nodo = Nodo::find($id);

        return view('nodo.edit', compact('nodo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Nodo $nodo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nodo $nodo)
    {
        request()->validate(Nodo::$rules);

        $nodo->update($request->all());

        return redirect()->route('nodos.index')
            ->with('success', 'Nodo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $nodo = Nodo::find($id)->delete();

        return redirect()->route('nodos.index')
            ->with('success', 'Nodo deleted successfully');
    }
}
