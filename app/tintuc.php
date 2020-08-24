<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    protected $table='tin';
    protected $primaryKey='idTin';
    protected $dates = ['Ngay']; //Khai báo các field kiểu ngày
    protected $fillable = [
            'TieuDe',
            'TomTat',
            'urlHinh',
            'Ngay',
            'idUser', 
            'Content',
            'idLT',
            'idTL',
            'SoLanXem', 
            'idTL', 
            'TinNoiBat', 
            'AnHien',
            'tags',
    ];
    public function ykien(){
        return $this->hasMany('App\ykien','idTin','idTin');
    }
}
