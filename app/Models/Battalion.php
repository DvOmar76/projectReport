<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Battalion extends Model
{
    use HasFactory;
    // الكتيبة
    protected $fillable=[
        'battalions_number','course_id'
    ];
    public $timestamps=false;
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
