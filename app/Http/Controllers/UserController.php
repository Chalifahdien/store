<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('role', 'asc')
            ->orderBy('name','asc')
            ->get();

        return view('pages.admin.user', compact('users'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validasi data yang masuk
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required|in:admin,kasir',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('password'),
            'role' => $request->role,
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'role' => 'required|in:admin,kasir',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        $user->save();

        return redirect()->route('user.index')->with('success', 'User berhasil diperbarui');
    }

    public function reset($id)
    {
        $user = User::findOrFail($id);
        $user->password = Hash::make('password');
        $user->save();

        return redirect()->back()->with('success', 'Password berhasil direset ke default');
    }

    public function destroy($id)
    {
        $dosen = User::findOrFail($id);
        $dosen->delete();

        return redirect()->route('user.index')->with('success', 'User berhasil dihapus.');
    }
}
