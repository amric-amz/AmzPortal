<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDepartment extends Model
{
    use HasFactory;

    protected $table = 'sub_department';
    protected $primaryKey = 'sub_departmentId';

    protected $guarded = [];


    public static function storeSubDepartment($data)
    {
        $sub_dapartment = SubDepartment::create($data);
        return $sub_dapartment;
    }

    public static function updateSubDepartment($update , $id)
    {
        $sub_department = SubDepartment::where('sub_departmentId' , $id)->update($update);
        return $sub_department;
    }

}
