<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Employee;
use App\Models\FamilyStatus;
use App\Models\Position;
use App\Models\EmployeeHasDeduction;
use App\Models\EmployeeHasAllowance;
use App\Models\Allowance;
use App\Models\Deduction;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        return view('employee/index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $FamilyStatus = FamilyStatus::all();
        $Position = Position::all();
        return view('employee/create', compact('FamilyStatus', 'Position'));
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
            'no_ktp' => 'required',
    		'npwp' => 'required',
    		'foto_profil' => 'mimes:jpeg,jpg,png|max:2200',
    		'position_id' => 'required',
    		'family_status_id' => 'required'
    	]);

        $foto_profil = $request->foto_profil;
        $new_foto_profil = time() . ' - ' . $foto_profil->getClientOriginalName();
 
        Employee::create([
    		'nama' => $request->nama,
    		'no_ktp' => $request->no_ktp,
    		'npwp' => $request->npwp,
            'foto_profil' => $new_foto_profil,
            'position_id' => $request->position_id,
            'family_status_id' => $request->family_status_id
    	]);

        $foto_profil->move('foto/', $new_foto_profil);
 
    	return redirect('/employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        $has_deduction = EmployeeHasDeduction::all();
        $has_allowance = EmployeeHasAllowance::all();
        return view('employee/show', compact('employee','has_allowance', 'has_deduction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        $allowance = allowance::all();
        $deduction = deduction::all();
        $has_deduction = EmployeeHasDeduction::all();
        $has_allowance = EmployeeHasAllowance::all();
        return view('employee/edit', compact('employee','has_allowance', 'has_deduction', 'allowance', 'deduction'));
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

        $employee = [
            'nama' => $request->nama,
            'value' => $request->value,
        ];
        Employee::whereId($id)->update($employee);
        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
