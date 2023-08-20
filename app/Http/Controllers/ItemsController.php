<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Http\Requests\StoreItemsRequest;
use App\Http\Requests\UpdateItemsRequest;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //$search = $request->query('search');
        
        $data_items = Items::query();
        $data_items = $data_items->select('items.item_name', 'kinds.kinds_name');
        $data_items = $data_items->join('kinds','items.kinds_id','=','kinds.id');
        if(request('search')){
            $data_items = $data_items->orWhere('items.item_name','like','%'.request('search').'%')
            ->orWhere('items.stock','like','%'.request('search').'%')
            ->orWhere('kinds.kinds_name','like','%'.request('search').'%')
            ->where('items.is_deleted',0)
            ->paginate(2)->fragment('std');
        }else{
            $data_items =Items::where('is_deleted',0)
            ->paginate(2)->fragment('std');
        }
        // dd($data_items);
        return view('items.data')->with([
            'items' => $data_items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemsRequest $request)
    {
        $validate = $request->validated();

        $items = new Items;
        $items->item_name = $request->txtin;
        $items->kinds_id = $request->txtik;
        $items->stock = $request->txtstock;
        $items->save();

        return redirect('items')->with('msg','Barang baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Items $items,$id)
    {
        $data = $items->find($id);
        // @dd($data);
        return view('items.edit')->with([
            'id' => $data->id,
            'txtin' => $data->item_name,
            'txtik' => $data->kinds_id,
            'txtstock' => $data->stock
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemsRequest $request, Items $items,$id)
    {
        $data = $items->find($id);
        $data->item_name = $request->txtin;
        $data->kinds_id = $request->txtik;
        $data->stock = $data->stock + $request->txtstock;
        $data->save();

        return redirect('items')->with('msg','Barang dengan nama '.$data->txtin.'telah berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Items $items,$id)
    {
        $data = $items->find($id);
        $data->is_deleted = true;
        $data->save();
        return redirect('items')->with('msg','data barang dengan nama '.$data->item_name . ' berhasil dihapus.');
    }
}
