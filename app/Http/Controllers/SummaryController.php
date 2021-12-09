<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Employee;
use App\Models\EmployeeAllowance;
use App\Models\EmployeeDeduction;
use App\Models\Allowance;
use App\Models\Deduction;
use App\Models\Position;
class SummaryController extends Controller
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
        $employee = Employee::all();
        $position = Position::all();
        return view('summary', compact('payroll','allowance', 'deduction', 'employee', 'position'));
    }

    
}
