<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\FamilyStatus;

class FamilyStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $FamilyStatus = FamilyStatus::all();
        return view('family_status/index', compact('FamilyStatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('family_status/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'nama' => 'required',
            'deskripsi' => 'required',
            'value' => 'required'
    	]);
 
        FamilyStatus::create([
    		'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'value' => $request->value
    	]);
 
    	return redirect('/family_status');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $FamilyStatus = FamilyStatus::find($id);
        return view('family_status/edit', compact('family_status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
    		'value' => 'required'
        ]);

        $FamilyStatus = [
            'nama' => $request->nama,
            'value' => $request->value,
        ];
        FamilyStatus::whereId($id)->update($FamilyStatus);
        return redirect('/family_status');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $FamilyStatus = FamilyStatus::findorfail($id);
        $FamilyStatus->delete();
        return redirect('/family_status');
    }
}
