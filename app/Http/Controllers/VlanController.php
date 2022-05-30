<?php

namespace App\Http\Controllers;

use App\Models\Vlan;
use Illuminate\Http\Request;

/**
 * Class VlanController
 * @package App\Http\Controllers
 */
class VlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vlans = Vlan::paginate();

        return view('vlan.index', compact('vlans'))
            ->with('i', (request()->input('page', 1) - 1) * $vlans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vlan = new Vlan();
        return view('vlan.create', compact('vlan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Vlan::$rules);

        $vlan = Vlan::create($request->all());

        return redirect()->route('vlans.index')
            ->with('success', 'Vlan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vlan = Vlan::find($id);

        return view('vlan.show', compact('vlan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vlan = Vlan::find($id);

        return view('vlan.edit', compact('vlan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vlan $vlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vlan $vlan)
    {
        request()->validate(Vlan::$rules);

        $vlan->update($request->all());

        return redirect()->route('vlans.index')
            ->with('success', 'Vlan updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vlan = Vlan::find($id)->delete();

        return redirect()->route('vlans.index')
            ->with('success', 'Vlan deleted successfully');
    }
}
