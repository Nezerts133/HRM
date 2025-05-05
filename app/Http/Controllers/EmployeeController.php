<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with(['department', 'position'])->paginate(10);
        return view('employees.index', compact('employees'));
    }

    public function show($id)
    {
        $employee = Employee::with(['department', 'position', 'documents', 'vacations'])->findOrFail($id);
        return view('employees.show', compact('employee'));
    }
}
