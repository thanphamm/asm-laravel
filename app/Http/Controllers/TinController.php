<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class TinController extends Controller
{
    public function index(){
        return view("index");
    }
    public function chitiettin($id){
        $kq= DB::table("tin")->where("idTin",$id)->where('AnHien',1)->first();
        $tags = DB::table('tin')->where([['idTin',$id], ['AnHien',1]])->value('tags');
        $ykien = DB::table('ykien')->where('idTin', $id)->get();
        $loaitin = DB::table('tin')->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')->where([['idTin',$id], ['tin.AnHien',1]])->value('Ten');
        $theloai = DB::table('tin')->join('theloai', 'tin.idTL', '=', 'theloai.idTL')->where([['idTin',$id], ['tin.AnHien',1]])->value('TenTL');
        $idlt = DB::table('tin')->where([['idTin', $id]])->get();
        $data = ['tin' => $kq, 'tag' => explode(',', $tags), 'bl' => $ykien, 'loaitin' => $loaitin, 'theloai' => $theloai, 'idlt' => $idlt];
        return view('chitiettin', $data);
    }
    public function tintrongloai($idLT, $pageNum=1){
        $kq = DB::table("tin")->where("idLT",$idLT)->where([["AnHien",1]])->orderby('Ngay', 'desc')->paginate(4);
        $TenLT = DB::table("loaitin")->where("idLT",$idLT)->value("Ten");
        $idTL = DB::table("loaitin")->where("idLT",$idLT)->value("idTL");
        $TenTL = DB::table("theloai")->where("idTL",$idTL)->value("TenTL");
        $data = ['listtin' => $kq, 'idTL' => $idTL, 'TenTL' => $TenTL, 'TenLT' => $TenLT , 'idLT' => $idLT];
        return view("tintrongloai", $data);
    }

    function lienhe(){
        $d=array('title'=>'Liên hệ');
        return
         view('lienhe',$d);
    }
    
    public function timkiem(){
        return view('timkiem');
    }
    public function baocao(){
        return view('baocao');
    }
}
