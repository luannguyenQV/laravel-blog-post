<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Admission;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class AdmissionController extends Controller
{
    public function getXettuyen() {			
    	return view('frontend.admission');
    }

    public function storeXettuyen(Request $request) {
    	$admiss = new Admission;
    	// PHAN 1: 9
    	$admiss->hoten = $request['hoten'];
    	$admiss->CMND = $request['CMND'];
    	$admiss->ngaysinh = $request['ngaysinh'];
    	$admiss->dangkybachoc = $request['dangkybachoc'];
    	$admiss->nganhhoc = $request['nganhhoc'];
    	$admiss->doituongthuockhuvucuutien = $request['doituongthuockhuvucuutien'];
    	$admiss->khoixettuyen = $request['khoixettuyen'];
    	$admiss->gioitinh = $request['gioitinh'];
        $admiss->khuvuc = $request['khuvuc'];
    	
    	// PHAN 2.1: 6 + 9 + 3
    	$admiss->x1mon1diemhocky1lop12 = $request['x1mon1diemhocky1lop12'];
    	$admiss->x1mon1diemhocky2lop12 = $request['x1mon1diemhocky2lop12'];
    	$admiss->x1mon2diemhocky1lop12 = $request['x1mon2diemhocky1lop12'];
    	$admiss->x1mon2diemhocky2lop12 = $request['x1mon2diemhocky2lop12'];
    	$admiss->x1mon3diemhocky1lop12 = $request['x1mon3diemhocky1lop12'];
    	$admiss->x1mon3diemhocky2lop12 = $request['x1mon3diemhocky2lop12'];

        $admiss->x2m1hocky1_11 = $request['x2m1hocky1_11'];
        $admiss->x2m1hocky2_11 = $request['x2m1hocky2_11'];
        $admiss->x2m1hocky1_12 = $request['x2m1hocky1_12'];
        $admiss->x2m2hocky1_11 = $request['x2m2hocky1_11'];
        $admiss->x2m2hocky2_11 = $request['x2m2hocky2_11'];
        $admiss->x2m2hocky1_12 = $request['x2m2hocky1_12'];
        $admiss->x2m3hocky1_11 = $request['x2m3hocky1_11'];
        $admiss->x2m3hocky2_11 = $request['x2m3hocky2_11'];
        $admiss->x2m3hocky1_12 = $request['x2m3hocky1_12'];

    	$admiss->dahoctruong = $request['dahoctruong'];
    	$admiss->hanhkiem11 = $request['hanhkiem11'];
    	$admiss->hanhkiem12 = $request['hanhkiem12'];

    	// PHAN 3: 4
    	$admiss->madangkyxettuyenhoacsbd = $request['madangkyxettuyenhoacsbd'];
    	$admiss->nhapdiemmon1 = $request['nhapdiemmon1'];
    	$admiss->nhapdiemmon2 = $request['nhapdiemmon2'];
    	$admiss->nhapdiemmon3 = $request['nhapdiemmon3'];

    	// PHAN 4: 3
    	$admiss->dienthoai = $request['dienthoai'];
    	$admiss->email = $request['email'];
    	$admiss->tenvadiachi = $request['tenvadiachi'];   
        $admiss->save(); 	
    	return redirect()->route('dangkythanhcong');
    }

    public function dangkythanhcong() {
        return view('frontend.dangkythanhcong');
    }
}
