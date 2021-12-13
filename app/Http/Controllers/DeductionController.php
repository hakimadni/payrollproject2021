<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Deduction;
use App\Models\EmpoloyeeDeduction;

class DeductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deduction = Deduction::all();
        return view('deduction/index', compact('deduction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deduction/create');
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
    		'nama' => ['required', 'unique:Deductions'],
            'value' => 'required'
    	]);
 
        Deduction::create([
    		'nama' => $request->nama,
            'value' => $request->value
    	]);
 
    	return redirect('/deduction');
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
        $deduction = Deduction::find($id);
        return view('deduction/edit', compact('deduction'));
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
            'nama' => ['required', 'unique:Deductions'],
    		'value' => 'required'
        ]);

        $deduction = [
            'nama' => $request->nama,
            'value' => $request->value,
        ];
        Deduction::whereId($id)->update($deduction);
        return redirect('/deduction');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $EmployeeDeduction = EmployeeDeduction::where('deduction_id',$id);
        $EmployeeDeduction->delete();

        $deduction = Deduction::findorfail($id);
        $deduction->delete();
        return redirect('/deduction');
    }
}
