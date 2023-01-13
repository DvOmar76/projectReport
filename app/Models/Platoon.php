<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platoon extends Model
{
    use HasFactory;
    //الفصيل
    protected $fillable=[
        'platoon_name','platoon_commander','company_id'
    ];
    public $timestamps=false;
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function groups(){
        return $this->hasMany(Group::class);
    }

}
