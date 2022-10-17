<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'branch_id',
        'employeeFname',
        'employeeLname',
        'employeeAddress',
        'employeePhone',
        'employeeSallary',
        'employeeRoll',
        'employeeScanedId'

    ];


    public function branch(){
        return $this->belongsTo(Branch::class);
    }
}
