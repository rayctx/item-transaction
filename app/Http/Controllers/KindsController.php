<?php

namespace App\Http\Controllers;

use App\Models\Kinds;
use App\Http\Requests\StoreKindsRequest;
use App\Http\Requests\UpdateKindsRequest;

class KindsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kinds.data')->with([
            'kinds' => Kinds::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKindsRequest $request)
    {
        $validate = $request->validated();

        $kinds = new Kinds;
        $kinds->kinds_name = $request->txtkn;
        $kinds->descriptions = $request->txtdes;
        $kinds->save();

        return redirect('kinds')->with('msg','Jenis Barang baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kinds $kinds,$id)
    {
        $data = $kinds->find($id);
        // @dd($data);
        return view('kinds.edit')->with([
            'id' => $data->id,
            'txtkn' => $data->kinds_name,
            'txtik' => $data->kinds_id,
            'txtdes' => $data->descriptions
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKindsRequest $request, Kinds $kinds,$id)
    {
        $data = $kinds->find($id);
        $data->kinds_name = $request->txtkn;
        $data->descriptions = $request->txtdes;
        $data->save();

        return redirect('kinds')->with('msg','Jenis Barang dengan nama '.$data->txtin.'telah berhasil diupdate.');//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kinds $kinds)
    {
        //
    }
}
