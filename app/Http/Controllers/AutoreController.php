<?php

namespace App\Http\Controllers;

use App\Models\Autore;
use App\Models\Nacionalidade;
use Illuminate\Http\Request;

/**
 * Class AutoreController
 * @package App\Http\Controllers
 */
class AutoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Autore::paginate();

        return view('autore.index', compact('autores'))
            ->with('i', (request()->input('page', 1) - 1) * $autores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autore = new Autore();
        $nacionalidades = Nacionalidade::pluck('descripcion', 'id');
        return view('autore.create', compact('autore', 'nacionalidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Autore::$rules);

        $autore = Autore::create($request->all());

        return redirect()->route('autores.index')
            ->with('success', 'Autore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $autore = Autore::find($id);

        return view('autore.show', compact('autore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autore = Autore::find($id);
        $nacionalidades = Nacionalidade::pluck('descripcion', 'id');
        return view('autore.edit', compact('autore', 'nacionalidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Autore $autore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autore $autore)
    {
        request()->validate(Autore::$rules);

        $autore->update($request->all());

        return redirect()->route('autores.index')
            ->with('success', 'Autore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $autore = Autore::find($id)->delete();

        return redirect()->route('autores.index')
            ->with('success', 'Autore deleted successfully');
    }
}
