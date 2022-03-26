<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('itemku.index');
    }
   
    public function store(Request $request)
    {   

        $regitem = $request->validate([
            'item'  => 'required',
            'qty'   => 'required',
            'price' => 'required',
            'total' => 'required',
        ]);

        Item::create($regitem);
        
        // $request->session()->flash('success','Register Successfull , Please Login');

        return redirect('/item')->with('success','Data Entry Success');
    }
    public function edit($id)
    {
       
        $regitem = Item::findOrFail($id);
        return view('/item', compact('item'));
    }

    public function update(Request $request, $id)
    {
        
        $regitem = $request->validate([
            'item'  => 'required',
            'qty'   => 'required',
            'price' => 'required',
            'total' => 'required',
        ]);
         //get data by ID
         $regitem = Item::where('id', $id)->update([
            'item'            => $request->item,
            'qty'             => $request->qty,
            'price'           => $request->price,         
            'total'           => $request->total,     
             ] );
             return redirect('/item')->with('success','Data Delete Success');
    }

    public function destroy($id)
    
    {  
        // dd($customer);
    //    $customer->delete();
        $regitem = Item::findOrFail($id);
        $regitem->delete();
        return redirect('/item')->with('success','Data Delete Success');
    }

}
