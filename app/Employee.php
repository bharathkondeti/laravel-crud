<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    public $table = 'ta_employee_master';
    protected $fillable = ['emp_id', 'emp_name', 'email', 'emp_dob', 'emp_doj'];

    public function saveEmployee($data)
    {
      //$this->id = auth()->user()->id;
      $this->emp_id = $data['emp_id'];
      $this->emp_name = $data['emp_name'];
      $this->email = $data['email'];
      $this->emp_dob = $data['emp_dob'];
      $this->emp_doj = $data['emp_doj'];
      $this->save();
      return true;
    }

}
