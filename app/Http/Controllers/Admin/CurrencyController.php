<?php

namespace App\Http\Controllers\Admin;

use App\Models\Currency;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.currency.index', [
            'currencies' => Currency::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Currency  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Currency $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Currency  $createCurrencyTable
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $createCurrencyTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Currency  $createCurrencyTable
     * @return \Illuminate\Http\Response
     */
    public function edit(Currency $createCurrencyTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCreateCurrencyTableRequest  $request
     * @param  \App\Models\CreateCurrencyTable  $createCurrencyTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Currency $createCurrencyTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreateCurrencyTable  $createCurrencyTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currency $createCurrencyTable)
    {
        //
    }
}
