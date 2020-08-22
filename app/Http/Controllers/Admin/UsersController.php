<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User;

        $user->name  =  $request->name;
        $user->email  =  $request->email;
        $user->password  = Hash::make($request->password);
        $user->status = $request->status;

        $user->save();

    }

    public function download()
    {
        $users = User::all();
        $pdf = \PDF::loadView('pdf.vista', compact('users'));

        return $pdf->stream('archivo.pdf');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = User::find($request->id)->delete();

    }

    public function change (Request $request)
    {
        $user = User::find($request->id);

       if ($user->status === 'Disabled') {

           $statuss = 'Active';
           $user->status = $statuss;
           $user->save();

       } else {
            $statuss = 'Disabled';
            $user->status = $statuss;
            $user->save();
       }
       ;

    }
}

