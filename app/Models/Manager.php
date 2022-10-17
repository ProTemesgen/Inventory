<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $table = 'managers';

    protected $fillable = [
        'branch_id',
        'managerFname',
        'managerLname',
        'managerAddress',
        'managerPhone',
        'managerSallary',
        'managerScanedId'
    ];



    public function branch(){
        return $this->belongsTo(Branch::class);
    }
}
