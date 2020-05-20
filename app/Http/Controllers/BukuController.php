<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;
use DataTables;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buku = Buku::get();
        return view('buku.index')->with(compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Buku::create($request->all());
        return redirect()->route('buku.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        //
        return view('buku.edit')->with(compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        //
        $buku->update($request->all());
        return redirect()->route('buku-datatable.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        //
        $buku->destroy($buku->id);
        return redirect()->route('buku-datatable.index');
    }

    public function dataTable(Request $request)
    {
        if($request->ajax())
        {
           $buku = Buku::select();
           return  DataTables::of($buku)
                    ->addColumn('action', function($buku){
                        return view('datatable._action', [
                            'buku' => $buku,
                            'edit_url' => route('buku.edit', $buku->id),
                            'destroy' => route('buku.destroy', $buku->id)
                        ]);
                    })
                    ->make(true);
        }
        return view('buku.datatable');
    }
}
