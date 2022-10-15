<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;


    public function asset(){
        return $this->hasMany(Asset::class);
    }
    public function manager(){
        return $this->hasOne(Manager::class);
    }
    public function employee(){
        return $this->hasMany(Employee::class);
    }
    
}
