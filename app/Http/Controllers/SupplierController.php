<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplier;      

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::get();
            
            return view('supplier.index', ['supplier' => $supplier]);
    }
        
    public function add()
    {
                
        return view('supplier.add_supplier');
    }	
    public function add_procces(Request $request)
    {
        $supplier= new Supplier;        
        $supplier->id = 4;
        $supplier->name = $request->name;
        // $supplier->phone= $request->phone;
        // $supplier->addres= $request->addres;
        $supplier->save();


        return view('supplier.index');
    }

    public function update($id,Request $request)
    {
        $supplier = Supplier::where('id',$id)->get();
    
        return view('supplier.update', ['supplier' => $supplier]);
    }

    public function update_procces($id,Request $request)
    {
        $supplier = Supplier::find($id);
        $supplier->name = $request->name;
        // $supplier->phone= $request->phone;
        // $supplier->addres= $request->addres;
        $supplier->save();

        return redirect('supplier.index');
    }


    public function delete($id,Request $request){
        $supplier = Supplier::find($id)->forceDelete();

                
        return redirect('supplier.index');
    }
}
