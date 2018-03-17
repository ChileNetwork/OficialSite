<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;

class ManageController extends Controller
{
    public function index()
    {
    	$roles = Role::all();
      	return redirect()->route('manage.dashboard')->withRoles($roles);
    }

    public function dashboard()
    {
      return view('manage.dashboard');
    }
}
