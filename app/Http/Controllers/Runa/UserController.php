<?php

namespace App\Http\Controllers\Runa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    function index()
    {
        $users = User::where('company', 'runa')->get();
        return view('runa.users.index', compact('users'));
    }

    function create()
    {
        return view('runa.users.create');
    }

    function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'level' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'level' => $request->level,
            'company' => 'runa',
            'password' => Hash::make($request->password),
        ]);

        return redirect(route('runa.user.index'));
    }

    function edit(User $user)
    {
        return view('runa.users.edit', compact('user'));
    }

    function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'level' => 'required',
        ]);

        $user->update($request->all());

        return redirect(route('runa.user.index'));
    }

    function destroy(User $user)
    {
        $user->delete();

        return redirect(route('runa.user.index'));
    }
}
