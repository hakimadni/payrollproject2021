<?php

namespace App\Http\Controllers;

use DB;
use App\Models\AdminCode;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $code = DB::table('admin_code')->select('code')->first();
        return view('admin-menu', compact('code'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
    		'new_code' => ['required','confirmed','min:6','max:12']
        ]);

        $code = [
            'code' => $request->new_code,
        ];
        AdminCode::first()->update($code);

        return back();
    }

}
