<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Services\AutoSyncService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            'currencies' => Currency::OrderedDisplay()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $defaultNumber = range(1, 50);
        $used = Currency::all()->pluck('display_number')->toArray();
        return view('admin.currency.create', [
            'displayNumber' => array_diff($defaultNumber, $used)
        ]);
    }

    public function autoSyncAdminCurrency()
    {
        (new AutoSyncService)->call();
        flash('Sukses Sync data')->success();

        return redirect()->route('currency.index');
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'flag' => [
                'required',
                'file',
                'mimes:jpg,jpeg,png',
                'max:1024',
            ],
            'name' => 'required|string',
            'buy' => 'required|string',
            'sell' => 'required|string',
            'display_number' => ['required', 'integer', 'unique:currency,display_number'],
        ])->validate();

        $images = $request->flag;
        $imageName = time() . '.' . $images->extension();

        try {
            $url_path = $images->move(Currency::FLAG_PATH, $imageName);
        } catch (\Throwable $th) {
            flash('Gagal menyimpan gambar! silahkan hubungi admin anda!')->error();

            return redirect()->back();
        }

        $data = array_merge($validated, ['default' => false, 'displayed' => true, 'flag' => $url_path]);
        if (Currency::create($data)) {
            flash('Sukses menyimpan data')->success();
        } else {
            flash('Gagal menyimpan data')->error();
        }

        return redirect()->route('currency.index');
    }

    public function show(Currency $currency)
    {
        //
    }

    public function edit(Currency $currency)
    {
        $defaultNumber = range(1, 50);
        $used = Currency::where('id', '!=', $currency->id)->pluck('display_number')->toArray();

        $canUsed = [];
        $canUsed = array_merge($canUsed, array_diff($defaultNumber, $used));

        return view('admin.currency.edit', [
            'currency' => $currency,
            'displayNumbers' => $canUsed
        ]);
    }

    public function update(Request $request, Currency $currency)
    {
        $validated = Validator::make($request->all(), [
            'flag' => [
                'file',
                'mimes:jpg,jpeg,png',
                'max:1024',
            ],
            'name' => 'required|string',
            'buy' => 'required|string',
            'sell' => 'required|string',
            'displayed' => 'required|boolean',
            'display_number' => "required|integer|unique:currency,display_number,$currency->id",
        ])->validate();

        if ($request->flag) {
            $images = $request->flag;
            $imageName = time() . '.' . $images->extension();

            try {
                $url_path = $images->move(Currency::FLAG_PATH, $imageName);
            } catch (\Throwable $th) {
                flash('Gagal mengubah gambar baru! silahkan hubungi admin anda! <br> error' . $th->getMessage())->error();

                return redirect()->back();
            }

            $file_path = $currency->flag;
            if (file_exists(public_path($file_path))) {
                unlink(public_path($file_path));
            }
            $validated['flag'] = $url_path;
        }

        if ($currency->update($validated)) {
            flash('Sukses Mengubah data')->success();
        } else {
            flash('Gagal Mengubah data')->error();
        }

        return redirect()->route('currency.index');
    }

    public function destroy(Currency $currency)
    {
        $file_path = $currency->flag;
        if ($currency->delete()) {
            if (file_exists(public_path($file_path))) {
                unlink(public_path($file_path));
            }
            flash('Sukses menghapus data')->success();
        } else {
            flash('Gagal menghapus data')->error();
        }

        return redirect()->route('currency.index');
    }
}
