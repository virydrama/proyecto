<?php

namespace App\Http\Controllers;

use App\Models\Nacionalidade;
use Illuminate\Http\Request;

/**
 * Class NacionalidadeController
 * @package App\Http\Controllers
 */
class NacionalidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nacionalidades = Nacionalidade::paginate();

        return view('nacionalidade.index', compact('nacionalidades'))
            ->with('i', (request()->input('page', 1) - 1) * $nacionalidades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nacionalidade = new Nacionalidade();
        return view('nacionalidade.create', compact('nacionalidade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Nacionalidade::$rules);

        $nacionalidade = Nacionalidade::create($request->all());

        return redirect()->route('nacionalidades.index')
            ->with('success', 'Nacionalidade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nacionalidade = Nacionalidade::find($id);

        return view('nacionalidade.show', compact('nacionalidade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nacionalidade = Nacionalidade::find($id);

        return view('nacionalidade.edit', compact('nacionalidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Nacionalidade $nacionalidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nacionalidade $nacionalidade)
    {
        request()->validate(Nacionalidade::$rules);

        $nacionalidade->update($request->all());

        return redirect()->route('nacionalidades.index')
            ->with('success', 'Nacionalidade updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $nacionalidade = Nacionalidade::find($id)->delete();

        return redirect()->route('nacionalidades.index')
            ->with('success', 'Nacionalidade deleted successfully');
    }
}
