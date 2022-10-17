<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'assetQrCode',
        'assetIdentificationName',
        'categoryMetric',
        'categoryType',
        'categoryPrice',
        'assetCounter'
    ];


    public function asset(){
        return $this->hasMany(Asset::class);
    }
    
}
