<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ykien;
class YKienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = ykien::orderBy('idYKien','desc')->get();
        return view('quantri.ykien.index', compact('ds'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quantri.ykien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr= explode("/",$request->get('Ngay'));
        if (count($arr)==3) $n = $arr[2]."-". $arr[1]."-".$arr[0];
        else $n = date("Y-m-d");        
        $y = new ykien([
            'HoTen' => $request->get('HoTen'),
            'Email' => $request->get('Email'),
            'NoiDung' => $request->get('NoiDung'),
            'Ngay' => $n,
            'idTin' => $request->get('idTin'),
            'AnHien' => $request->get('AnHien'),
        ]);
        $y->save();
        return redirect('ykien')->with('success','Ý kiến đã được lưu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = ykien::find($id);
        return view('quantri.ykien.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $arr= explode("/",$request->get('Ngay'));
        if (count($arr)==3) $n = $arr[2]."-". $arr[1]."-".$arr[0];
        else $n = date("Y-m-d");     
        $y = ykien::find($id);
        $y->HoTen =   $request->get('HoTen');
        $y->Email = $request->get('Email');
        $y->Ngay = $n;
        $y->NoiDung = $request->get('NoiDung');
        $y->idTin = $request->get('idTin');
        $y->AnHien = $request->get('AnHien');
        $y->save();
        return redirect('/ykien')->with('success','Cập nhật ý kiến thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $y = ykien::find($id);
        $y->delete();
        return redirect('/ykien')->with('success', 'Đã xóa xong');
    }
}
