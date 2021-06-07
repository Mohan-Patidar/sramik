<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class labour extends Model
{
    protected $table = 'labours';
    protected $fillable = ['labour_id','date','labour_name','leader_name','work','image','leader_contact','dob','mobile_no','aadhar_no','f_name','age',
'samagr','village','posto','tehsil','district','state','pincode','gender','experience','class','year','marks','max','percentage','bank_name','ifsc','acc_no','branch','bank_add',
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
