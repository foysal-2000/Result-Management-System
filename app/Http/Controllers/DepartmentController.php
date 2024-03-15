<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function create()
    {
        $departments = Department::all();
        return view('Backend.department.create',compact('departments'));
    }
    public function store(Request $request)
    {
        $department = $request->all();
        $departments  = Department::create($department);
        return redirect()->route('Backend.department.create');
    }
}
