<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Employee;
use App\Models\EmployeeAllowance;
use App\Models\EmployeeDeduction;
use App\Models\Allowance;
use App\Models\Deduction;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $payroll = Employee::withSum('Allowance', 'value')->withSum('Deduction', 'value')->get();
        // dd($payroll);
        $allowance = Allowance::all();
        $deduction = Deduction::all();
        return view('payroll/index', compact('payroll','allowance', 'deduction'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        
        $payroll = Employee::withSum('Allowance', 'value')->withSum('Deduction', 'value')->find($id);
        // dd($payroll);
        return view('payroll/show', compact('payroll'));
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
            'nama' => 'required',
    		'value' => 'required'
        ]);

        $allowance = [
            'nama' => $request->nama,
            'value' => $request->value,
        ];
        Allowance::whereId($id)->update($allowance);
        return redirect('/allowance');
    }
}
