<?php

namespace App\Http\Controllers;
use App\Http\Requests\comprarequest;
use App\Models\compra;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class compracontroller extends Controller
{
  

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
        return view('create.compracreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(comprarequest $request)
    {
        $validated = $request->validated();

        auth()->user()->compra()->create($validated);

        return redirect()
            ->route('site.dashboard')
            ->with('success','compra registrada na sua lista');
    }

    /**
     * Display the specified resource.
     */
    public function show(compra $compra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(compra $compra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, compra $compra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(compra $compra)
    {
        if($compra->user_id != auth()->user()->id){
            abort(403,'não mexe nu que não é seu!!');
        }

        $compra->delete();

        return redirect()
        ->route('site.dashboard')
        ->with('success','compra removida com sucesso');
    }
}
