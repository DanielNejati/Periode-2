<?php

namespace App\Http\Controllers;

use App\Models\Busride;
use App\Models\Festival;
use App\Models\User;
use App\Models\UsersEdit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function indexBusrides()
    {
        $busrides = Busride::all();
        $festivals = Festival::all();
        return view('admin.all-busrides', compact('busrides'), compact('festivals'));
    }

    public function indexFestival()
    {
        $festivals = Festival::all();
        return view('admin.all-festivals', compact('festivals'));
    }

    public function indexUsers()
    {
        $users = User::all();
        return view('admin.all-users', compact('users'));
    }
    public function usersEdit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit.user-edit', compact('user'));
    }

    public function usersUpdate(Request $request, $id){

        $validated = $request->validate([
            'name'=> 'required|string|max:255',
            'email'=> 'required|string|max:255',
            'tel'=> 'nullable|string|max:15',
            'saldo'=> 'required|int|max:1000000',
            'vip_punten'=> 'required|int|max:1000000',
            'role'=> 'required|string'
        ]);
        $user = User::findOrFail($id);
        $user->update($validated);

        return redirect(route('management.indexUsers'));


    }
}
