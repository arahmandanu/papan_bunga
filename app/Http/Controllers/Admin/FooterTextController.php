<?php

namespace App\Http\Controllers\Admin;

use App\Models\FooterText;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFooterTextRequest;
use App\Http\Requests\UpdateFooterTextRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FooterTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.footer_text.index', [
            'footerTexts' => FooterText::orderBy('number_show', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $defaultNumber = range(1, 10);
        $used = FooterText::all()->pluck('number_show')->toArray();

        return view('admin.footer_text.create', [
            'numberDisplay' => array_diff($defaultNumber, $used)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFooterTextRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'text' => 'required|string',
            'number_show' => 'required|integer|unique:footer_texts,number_show'
        ])->validate();

        if (FooterText::create($validated)) {
            flash('Sukses menyimpan data')->success();
        } else {
            flash('Gagal menyimpan data')->error();
        }

        return redirect()->route('footer_text.index');
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
        $defaultNumber = range(1, 10);
        $used = FooterText::where('id', '!=', $footerText->id)->pluck('number_show')->toArray();

        $canUsed = [];
        $canUsed = array_merge($canUsed, array_diff($defaultNumber, $used));
        return view('admin.footer_text.edit', [
            'footerText' => $footerText,
            'numberDisplay' => $canUsed
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFooterTextRequest  $request
     * @param  \App\Models\FooterText  $footerText
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FooterText $footerText)
    {
        $validated = Validator::make($request->all(), [
            'text' => 'required|string',
            'number_show' => "required|integer|unique:footer_texts,number_show,$footerText->id"
        ])->validate();

        if ($footerText->update($validated)) {
            flash('Sukses mengubah data')->success();
        } else {
            flash('Gagal mengubah data')->error();
        }

        return redirect()->route('footer_text.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterText  $footerText
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterText $footerText)
    {
        if ($footerText->delete()) {
            flash('Sukses menghapus data')->success();
        } else {
            flash('Gagal menghapus data')->error();
        }

        return redirect()->route('footer_text.index');
    }
}
