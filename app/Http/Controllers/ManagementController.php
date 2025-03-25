<?php

namespace App\Http\Controllers;

use App\Models\Busride;
use App\Models\Festival;
use App\Models\User;
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
}
