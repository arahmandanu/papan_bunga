<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TextColor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TextColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.text_color.index', [
            'colors' => TextColor::all()
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function reset(TextColor $text_color)
    {
        if ($text_color->update(['value' => null])) {
            flash('Sukses mereset warna')->success();
        } else {
            flash('Gagal mereset warna')->error();
        }

        return redirect()->route('text_color.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterTextColor  $footerTextColor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TextColor $text_color)
    {
        $validated = Validator::make($request->all(), [
            'value' => 'required'
        ])->validate();

        if ($text_color->update($validated)) {
            flash('Sukses mengubah warna')->success();
            $status = 'Success update warna!';
            $code = 201;
        } else {
            flash('Gagal mengubah warna')->error();
            $status = 'Gagal update warna';
            $code = 422;
        }

        return response()->json([
            'status' => $status,
        ], $code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterTextColor  $footerTextColor
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterTextColor $footerTextColor)
    {
        //
    }
}
