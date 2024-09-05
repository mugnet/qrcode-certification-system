<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function beneficiary(){
        return $this->belongsTo(Beneficiary::class);
    }
}
