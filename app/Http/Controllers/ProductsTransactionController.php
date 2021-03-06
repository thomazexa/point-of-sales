<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\Products_transaction;
use File;
use Excel;
use DB;
use Image;

use Illuminate\Http\Request;

class ProductsTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products_transaction::with('category')->orderBy('created_at', 'DESC')->paginate(10);
        return view('products.index_transaction', compact('products'));
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
     * @param  \Illuminate\Http\Request  $request
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

    public function downloadExcel($type)
    {
        $data = Products_transaction::get()->toArray();
        return Excel::create('TokoIbuAdjis', function($excel) use ($data) {
            
            $excel->sheet('DataExport', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

}
