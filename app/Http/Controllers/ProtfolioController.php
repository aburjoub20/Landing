<?php

namespace App\Http\Controllers;

use App\Models\protfolio;
use Illuminate\Http\Request;
use Exception;

class ProtfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.protfolio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
            try{

                protfolio::create([
                    'name'=>['en'=>$request->name_en , 'ar'=>$request->name_ar],
                    'desc'=>$request->desc,
                ]);
    
            }
            catch(Exception $e){
    return redirect()->back()->withError(['error'=>$e->getMessage()]);
            
             }
            }    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\protfolio  $protfolio
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $protfolios = Protfolio::get();
        return view('backend.protfolio.index')->compact('protfolios');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\protfolio  $protfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(protfolio $protfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\protfolio  $protfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, protfolio $protfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\protfolio  $protfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(protfolio $protfolio)
    {
        //
    }
}
