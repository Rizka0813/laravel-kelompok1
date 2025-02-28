<?php

namespace App\Http\Controllers;

use App\Models\Data_supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\View\View;
class SupplierControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Data_suppliers=Data_supplier::all ();
        return view('Data_suppliers.index', compact('Data_suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():View
    {
        return view('Data_suppliers.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Data_supplier::create([
            'nama_supplier'     => $request->nama_supplier,
            'alamat'     => $request->alamat,
            'kota'   => $request->kota,
            'provinsi'   => $request->provinsi,
            'kode_pos'   => $request->kode_pos,
            'nomor_telepon'   => $request->nomor_telepon,
            'email'   => $request->email,
            'kategori_supplier'   => $request->kategori_supplier,
            'batas_kredit'   => $request->batas_kredit,

        ]);
        //redirect to index
        return redirect()->route('Data_suppliers.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data_supplier  $data_supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Data_supplier $data_supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data_supplier  $data_supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Data_supplier $data_supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data_supplier  $data_supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data_supplier $data_supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data_supplier  $data_supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($Data_suppliers): RedirectResponse
    {
        $Data_suppliers = Data_supplier::findOrfail($Data_suppliers);
        $Data_suppliers->delete();

        return redirect()->route('Data_suppliers.index')->with('success', 'Data berhasil di hapus');
    }
}
