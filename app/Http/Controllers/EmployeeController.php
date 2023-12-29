<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $datas = Employee::all();
        return view("employee.pegawai", compact("datas"));
    }
    public function tambahpegawai(){
        return view('employee.tambahpegawai');
    }
    public function tambah_pegawai(Request $request){
        if($request->input('nama') == 'ardwiyan'){
        return redirect()->back()->with('failed','gagal coy');
        }
        Employee::create($request->all());
        return redirect('pegawai')->with('success','sukses guys');
    }
    public function pegawai($id){
        $data = Employee::find($id);
        // dd($data);
        return view('employee.detailpegawai', compact('data'));
    }
    
    public function edit_pegawai(Request $request, $id){
        $data = Employee::find($id);
        $data->nama = $request->nama;
        $data->nomor_telepon = $request->nomor_telepon;
        $data->jenis_kelamin = $request->jenis_kelamin;

        $data->update();
        return redirect()->back()->with('success','sukses update guys');
    }

    public function delete_pegawai($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->back()->with('success','sukses delete guys');
    }
}
