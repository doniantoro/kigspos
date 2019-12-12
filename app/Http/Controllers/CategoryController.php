<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Goods_category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Goods_category::orderBy('created_at', 'desc')->get();
        return view('categories.index', compact('categories'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            'type_gem' => 'nullable|string'
        ]);

        try {
            $categories = new Goods_category();
            $categories->name = request('name');
            $categories->type_gem = request('type_gem');
            $categories->save();
            return redirect()->back()->with('message', 'Kategori ' .$categories->name. ' berhasil ditambahkan !!');
        } catch (\Exception $th) {
            dd($th);
            return redirect()->back()->with(['error']);
        }
    }

    public function destroy($id){
        $categories = Goods_category::findOrFail($id);
        $categories->delete();
        return redirect()->back()->with('success', 'kategory ' .$categories->name. ' berhasil dihapus');
    }

    public function edit($id){
        $categories = DB::table('goods_categories')->find($id);
        return view('categories.edit', compact('categories'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required|string',
            'type_gem' => 'nullable|string'
        ]);

        try {
            $categories = Goods_category::findOrFail($id);

            $categories->update([
                'name' => $request->name,
                'type_gem' => $request->type_gem
            ]);
            return redirect(route('categories.index'))->with('message', 'Kategori ' .$categories->name. ' berhasil di perbarui');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', $th);
        }
    }
}
