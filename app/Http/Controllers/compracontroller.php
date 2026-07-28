<?php

namespace App\Http\Controllers;
use App\Http\Requests\comprarequest;
use App\Models\compra;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\compralog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class compracontroller extends Controller
{
  
   use AuthorizesRequests;
    

    public function index(): view
    {
        $compra = auth()->user()->compra()->
        with('compralog')
        ->get();
        return view('dashboard', compact('compra'));  
    }

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


        
        Auth::user()->compra()->create($validated);

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
       $this->authorize('update',$compra);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, compra $compra)
    {
        $this->authorize('update',$compra);

        $compra->update($request->all());

        return redirect()
        ->route('compra.index')
        ->with('success', 'compra modificada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(compra $compra)
    {
        $this->authorize('delete',$compra);

        $compra->delete();

        return redirect()
        ->route('site.dashboard')
        ->with('success','compra removida com sucesso');
    }

    public function toggle(compra $compra)
    {
         $this->authorize('toggle',$compra);


          $today = \Carbon\Carbon::today()->toDateString();

        $log=compralog::query()
        ->where('compra_id', $compra->id)
        ->where('completed_at', $today)
        ->first();

        if($log){
            $log->delete();
        }else{
            compralog::create([
                'user_id' => Auth::user()->id,
                'compra_id' => $compra->id,
                'completed_at' => $today,
            ]);

        }
        return redirect()
            ->route('compra.index')
            ->with('success','compra feita');

    }
    public function editcompra()
    {
        $compra = Auth::user()->compra;
        return view('edit.editcompra', compact('compra'));
    }

   
}
