<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'department';
    protected $primaryKey = 'department_id';

    // protected $guarded = [];
    protected $fillable = ['departmentName'];

    public static function departmentStore($dapartmentData)
    {
        $departmentStore =  Department::create($dapartmentData);
        return $departmentStore;
    }

    public static function updateDepartment($dapartmentupdate , $id)
    {
        $updateDepartment = Department::where('department_id' , $id)->update($dapartmentupdate);
        return $updateDepartment;
    }

}
