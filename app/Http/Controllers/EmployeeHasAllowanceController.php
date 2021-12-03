<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\EmployeeAllowance;

class EmployeeHasAllowanceController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'employee_id' => 'required',
            'allowance_id' => 'required'
    	]);
 
        EmployeeDeduction::create([
    		'employee_id' => $request->employee_id,
            'allowance_id' => $request->allowance_id
    	]);
 
    	return back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $EmployeeAllowance = EmployeeAllowance::findorfail($id);
        $EmployeeAllowance->delete();
        return back();
    }
}
