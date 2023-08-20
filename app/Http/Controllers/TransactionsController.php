<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use App\Http\Requests\StoreTransactionsRequest;
use App\Http\Requests\UpdateTransactionsRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Items;
use Carbon\Carbon;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('transactions.data')->with([
            'transactions' => Transactions::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionsRequest $request)
    {
        $validate = $request->validated();

        $id_item = $request->txtitem;
        
        $transactions = new Transactions();
        $transactions->item_id = $id_item;
        $transactions->transactions_date =Carbon::now();
        $transactions->amount_sold = $request->txtjt;
        $current_item = DB::table('items')->where('id',$id_item)->first();
        
        $current_stock = $current_item->stock - $request->txtjt;
        DB::table('items')
            ->where('id', $id_item)
            ->update(['stock' => $current_stock]);
        // dd($current_item);
        $transactions->save();

        
        // $current_item->save();

        return redirect('transactions')->with('msg','Barang baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transactions $transactions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transactions $transactions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionsRequest $request, Transactions $transactions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transactions $transactions)
    {
        //
    }
}
