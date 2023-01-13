<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    //السرية
    protected $fillable=[
        'company_name','company_commander','company_id','battalion_id'
    ];
    public $timestamps=false;
    public function battalion(){
        return $this->belongsTo(Battalion::class);
    }
    public function platoons(){
        return $this->hasMany(Platoon::class);
    }
}
