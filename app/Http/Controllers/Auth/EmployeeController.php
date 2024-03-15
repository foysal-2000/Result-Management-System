<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
class EmployeeController extends Controller
{
    public function dashboard()
    {
        return view('Backend.employee.dashboard');
    }
    public function index()
    {
        return view('Backend.employee.index');
    }
}
