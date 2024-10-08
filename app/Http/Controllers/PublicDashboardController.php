<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\FooterText;
use App\Models\Properties;
use App\Models\TextColor;
use Illuminate\Http\Request;

class PublicDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Properties::first();
        $maxShow = env('TOTAL_FLAG_SHOWED', 10);
        $flags = Currency::where('displayed', true)->OrderedDisplay()->get()->toArray();
        $data = array_chunk($flags, $maxShow);
        $footers = FooterText::orderBy('number_show', 'asc')->get()->pluck('text');
        $allColor = TextColor::all();
        $colors = [];
        foreach ($allColor as $key => $value) {
            $colors[$value->name] = [
                'value' => $value->value,
                'default' => $value->default
            ];
        }

        return view('public.index', [
            'currencies' => $data,
            'maxShow' => 10,
            'totalPage' => count($data),
            'footers' => $footers,
            'colors' => $colors,
            'properties' => $properties
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
