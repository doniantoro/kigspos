<?php

namespace App\Http\Controllers;

use App\User;
use App\UserLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('username', 'desc')->get();
        return view('user.index', compact('users'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            'username' => 'required|string',
            'user_level_id' => 'required',
            'password' => 'required'
        ]);

        try {
            $users = new User();
            $users->name = request('name');
            $users->username = request('username');
            $users->user_level_id = request('user_level_id');
            $users->password = Hash::make('password');
            $users->save();
            return redirect()->back()->with('message', 'User ' .$users->username. ' berhasil ditambahkan !!');
        } catch (\Exception $th) {
            dd($th);
            return redirect()->back()->with(['error']);
        }
    }

    public function destroy($id) {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->back()->with('success', 'User ' .$users->username. ' berhasil dihapus');
    }

    public function edit($id){
        $users = User::findOrFail($id);
        // $userLevel = UserLevel::orderBy('id')->get();
        // dd($userLevel);
        return view('user.edit', compact('users'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required|string',
            'username' => 'required|string',
            'user_level_id' => 'required',
            'password' => 'required'
        ]);

        $userLevel = UserLevel::orderBy('id', 'desc')->get();

        try {
            $users = User::findOrFail($id);
            $users->name = request('name');
            $users->username = request('username');
            $users->user_level_id = request('user_level_id');
            $users->password = Hash::make('password');
            $users->update([
                'name' => $request->name,
                'username' => $request->username,
                'user_level_id' => $request->user_level_id,
                'password' => $request->password
            ]);
            return redirect(route('user.index'))->with('message', 'User ' .$users->username. ' berhasil di perbarui');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', $th);
        }
    }
}
