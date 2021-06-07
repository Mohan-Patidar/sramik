<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $table = 'farmers';
    protected $fillable = ['farmer_id','date','farmer_name','work_time','land','work','image','mobile','aadhar_no','labour_no',
'samagr','village','posto','tehsil','district','state','pincode','gender','class','year','marks','max','percentage','bank_name','ifsc','acc_no','branch','bank_add',
'pan','acc_holder','ex_work'];
    protected $casts = [
        'work' => 'array',
        'class'=>'array',
        'year'=>'array',
        'marks'=>'array',
        'max'=>'array',
        'percentage'=>'array',
    ];
}
