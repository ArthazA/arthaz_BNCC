<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmpController extends Controller
{
    public function AddEmployee() {
        return view('addEmployee');
    }

    public function StoreEmployee(Request $req) {
        Employee::create([
            'empName' => $req->empName,
            'age' => $req->age,
            'address' => $req->address,
            'phoneNo' => $req->phoneNo,
        ]);

        return redirect('/');
    }

    public function ViewAllEmployee() {
        $employee = Employee::all();

        return view('welcome')->with('emps', $employee);
    }

    public function ViewUpdateEmployee($id) {
        $employee = Employee::findOrFail($id);

        return view('updateEmployee')->with('emps', $employee);
    }

    public function UpdateEmployee($id, Request $req) {
        $employee = Employee::findOrFail($id)->update([
            'empName' => $req->empName,
            'age' => $req->age,
            'address' => $req->address,
            'phoneNo' => $req->phoneNo,
        ]);

        return redirect('/');
    }

    public function DeleteEmployee($id) {
        Employee::destroy($id);

        return redirect('/');
    }
}
