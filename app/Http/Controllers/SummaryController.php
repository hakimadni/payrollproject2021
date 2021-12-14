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
        $last5 = Employee::latest()->take(5)->get();
        $paylast30 = Employee::withSum('Allowance', 'value')->withSum('Deduction', 'value')->where('created_at', '>', now()->subDays(30)->endOfDay())->get();
        // dd($payroll);
        $allowlast30 = Employee::withSum('Allowance', 'value')->where('created_at', '>', now()->subDays(30)->endOfDay())->get();
        $deductlast30 = Employee::withSum('Deduction', 'value')->where('created_at', '>', now()->subDays(30)->endOfDay())->get();
        $allowance = Allowance::all();
        $deduction = Deduction::all();
        $employee = Employee::all();
        $position = Position::all();
        return view('summary', compact('payroll','allowance', 'deduction', 'employee', 'position', 'allowlast30', 'deductlast30', 'paylast30', 'last5'));
    }

    
}
