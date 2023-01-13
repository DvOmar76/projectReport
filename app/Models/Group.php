<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    use HasFactory;
    protected $fillable=[
        'group_name','platoon_id'
    ];
    public $timestamps=false;
    public function platoon(){
        return $this->belongsTo(Platoon::class);
    }
}
