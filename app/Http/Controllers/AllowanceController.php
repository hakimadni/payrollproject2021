<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Allowance;
use App\Models\EmployeeAllowance;

class AllowanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $allowance = Allowance::all();
        return view('allowance/index', compact('allowance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('allowance/create');
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
    		'nama' => ['required', 'unique:Allowances'],
            'value' => 'required'
    	]);
 
        Allowance::create([
    		'nama' => $request->nama,
            'value' => $request->value
    	]);
 
    	return redirect('/allowance');
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
        $allowance = Allowance::find($id);
        return view('allowance/edit', compact('allowance'));
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
            'nama' => ['required', 'unique:Allowances'],
    		'value' => 'required'
        ]);

        $allowance = [
            'nama' => $request->nama,
            'value' => $request->value,
        ];
        Allowance::whereId($id)->update($allowance);
        return redirect('/allowance');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $EmployeeAllowance = EmployeeAllowance::where('allowance_id',$id);
        $EmployeeAllowance->delete();

        $allowance = Allowance::findorfail($id);
        $allowance->delete();
        return redirect('/allowance');
    }
}
