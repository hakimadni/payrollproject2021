<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Employeededuction;

class EmployeeHasDeductionController extends Controller
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
            'deduction_id' => 'required'
    	]);
 
        EmployeeDeduction::create([
    		'employee_id' => $request->employee_id,
            'deduction_id' => $request->deduction_id
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
        $EmployeeDeduction = EmployeeDeduction::findorfail($id);
        $EmployeeDeduction->delete();
        return back();
    }
}
