<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Role::create(['name' => 'writer']);
        //$permission = Permission::create(['name' => 'edit post']);
        //$role = Role::findById(1);
        //$permission  = Permission::findById(2);
        //$role->givePermissionTo($permission);

        //auth()->user()->givePermissionTo('edit post');
        //auth()->user()->assignRole('writer');

        // get a list of all permissions directly assigned to the user
       // return auth()->user()->getAllPermissions();
        //    return auth()->user()->permission('edit post')->get();
        return view('home');
    }
}
