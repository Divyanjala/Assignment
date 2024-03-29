<?php

namespace domain\employee;

// use Illuminate\Support\Facades\Auth;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Unit;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class EmployeeService
{

    protected $employee;
    protected $department;
    protected $unit;

    public function __construct()
    {
        $this->employee = new Employee();
        $this->department = new Department();
        $this->unit =new Unit();
    }

    /**
     * All employee
     */
    public function all()
    {
        return $this->employee->where('status',1)->orderBy('id', 'desc')->get();
    }
       /**
     * All employee
     */
    public function allUnits()
    {
        return $this->unit->orderBy('id', 'desc')->get();
    }
    /**
     * get employee
     */
    public function get($id)
    {
        return $this->employee->find($id);
    }

           /**
     * Validate Email user
     *
     * @param Edit $edit
     * @param Email $email
     * @return mixed
     */
    public function validateEmail($request)
    {
        if ($request->get('email')) {
            $email = $request->get('email');
            $data = $this->employee->where('email', $email)->count();
            if ($data > 0) {
                return 0;
            } else {
                return 1;
            }
        }
    }


        /**
     * Make user Array
     * @param array $data
     * @return mixed
     */
    public function make($data)
    {


        $employee= $this->employee->create($data);

        $employee= $this->employee->where('id',$employee->id)->update(['code'=>'EMP'.(string)$employee->id]);
        return $employee;
    }

}
