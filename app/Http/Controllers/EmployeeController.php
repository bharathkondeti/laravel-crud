<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('emp_view.create_emp');
  }

  /**
  *
  *
  */
  public function save(Request $request) {
    $employee = new Employee();
    $data = $this->validate($request, [
      'emp_id' => 'required',
      'emp_name' => 'required',
      'email' => 'required',
      'emp_dob' => 'required',
      'emp_doj' => 'required'
    ]);

    $employee->saveEmployee($data);
    return redirect('/create/employee')->with('success', 'Employee Record Created Sucessfully');
  }

}
