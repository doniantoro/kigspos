<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\GoodsCategory;
use App\GoodsSubcategory;

class CategoryController extends Controller
{
    public function index(){
        $categories = GoodsCategory::orderBy('created_at', 'desc')->get();
        $subCategories = GoodsSubcategory::orderBy('name', 'asc')->get();
        return view('categories.index', compact('categories', 'subCategories'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            // 'type_gem' => 'nullable|string'
        ]);

        try {
            $categories = new GoodsCategory();
            $categories->name = request('name');
            // $categories->type_gem = request('type_gem');
            $categories->save();
            return redirect()->back()->with('message', 'Kategori ' .$categories->name. ' berhasil ditambahkan !!');
        } catch (\Exception $th) {
            dd($th);
            return redirect()->back()->with(['error']);
        }
    }

    public function destroy($id){
        $categories = GoodsCategory::findOrFail($id);
        $categories->delete();
        return redirect()->back()->with('success', 'kategori ' .$categories->name. ' berhasil dihapus');
    }

    public function edit($id){
        $categories = DB::table('goods_category')->find($id);
        return view('categories.edit', compact('categories'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required|string',
            // 'type_gem' => 'nullable|string'
        ]);

        try {
            $categories = GoodsCategory::findOrFail($id);

            $categories->update([
                'name' => $request->name,
                // 'type_gem' => $request->type_gem
            ]);
            return redirect(route('categories.index'))->with('message', 'Kategori ' .$categories->name. ' berhasil di perbarui');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', $th);
        }
    }
}
