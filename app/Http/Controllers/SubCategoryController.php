<?php

namespace App\Http\Controllers;

// use App\GoodsCategory;
use App\GoodsSubcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index() {
        $subCategories = GoodsSubcategory::orderBy('created_at', 'desc')->get();
        return view('subCategories.index', compact('subCategories'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            // 'type_gem' => 'nullable|string'
        ]);

        try {
            $subCategories = new GoodsSubCategory();
            $subCategories->name = request('name');
            // $categories->type_gem = request('type_gem');
            $subCategories->save();
            return redirect()->back()->with('message', 'Kategori ' .$subCategories->name. ' berhasil ditambahkan !!');
        } catch (\Exception $th) {
            dd($th);
            return redirect()->back()->with(['error']);
        }
    }

    public function destroy($id) {
        $subCategories = GoodsSubCategory::findOrFail($id);
        $subCategories->delete();
        return redirect()->back()->with('success', 'sub kategori ' .$subCategories->name. ' berhasil dihapus');
    }

    public function edit($id){
        $subCategories = GoodsSubCategory::findOrFail($id);
        return view('subCategories.edit', compact('subCategories'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required|string',
            // 'type_gem' => 'nullable|string'
        ]);

        try {
            $subCategories = GoodsSubCategory::findOrFail($id);

            $subCategories->update([
                'name' => $request->name,
                // 'type_gem' => $request->type_gem
            ]);
            return redirect(route('subCategories.index'))->with('message', 'Sub Kategori ' .$subCategories->name. ' berhasil di perbarui');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', $th);
        }
    }
}
