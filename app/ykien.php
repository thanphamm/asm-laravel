<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ykien extends Model
{
    protected $table='ykien';
    protected $primaryKey='idYKien';
    protected $dates = ['Ngay']; //Khai báo các field kiểu ngày
    protected $fillable = [
        'idTin',
        'Ngay',
        'NoiDung',
        'Email',
        'HoTen', 
        'AnHien',
    ];
}
