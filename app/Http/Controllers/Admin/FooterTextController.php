<?php

namespace App\Http\Controllers\Admin;

use App\Models\FooterText;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFooterTextRequest;
use App\Http\Requests\UpdateFooterTextRequest;

class FooterTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreFooterTextRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFooterTextRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FooterText  $footerText
     * @return \Illuminate\Http\Response
     */
    public function show(FooterText $footerText)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterText  $footerText
     * @return \Illuminate\Http\Response
     */
    public function edit(FooterText $footerText)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFooterTextRequest  $request
     * @param  \App\Models\FooterText  $footerText
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFooterTextRequest $request, FooterText $footerText)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterText  $footerText
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterText $footerText)
    {
        //
    }
}
