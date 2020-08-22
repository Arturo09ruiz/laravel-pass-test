<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;


class IndexController extends Controller
{
    public function index(){

      
        $users = User::all()->count();

        $enero = User::where('created_at', 'LIKE', "%2020-01%")->get()->count();
        $febrero = User::where('created_at', 'LIKE', "%2020-02%")->get()->count();
        $marzo = User::where('created_at', 'LIKE', "%2020-03%")->get()->count();
        $abril = User::where('created_at', 'LIKE', "%2020-04%")->get()->count();
        $mayo = User::where('created_at', 'LIKE', "%2020-05%")->get()->count();
        $junio = User::where('created_at', 'LIKE', "%2020-06%")->get()->count();
        $julio = User::where('created_at', 'LIKE', "%2020-07%")->get()->count();
        $agosto = User::where('created_at', 'LIKE', "%2020-08%")->get()->count();
        $septiembre = User::where('created_at', 'LIKE', "%2020-09%")->get()->count();
        $octubre = User::where('created_at', 'LIKE', "%2020-10%")->get()->count();
        $noviembre = User::where('created_at', 'LIKE', "%2020-11%")->get()->count();
        $diciembre = User::where('created_at', 'LIKE', "%2020-12%")->get()->count();


        return view('admin.index', compact('users', 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'));


    }
}
