<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable=[
        'group_id','entry_date','major','phone_number','national_id','military_number','student_name'
    ];
    public $timestamps=false;

    public function group(){
        return $this->belongsTo(Group::class);
    }
}
