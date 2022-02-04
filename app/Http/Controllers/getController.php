<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\produca;

class getController extends Controller{
    
    public function getdata($id=null){
        return $id?produca::find($id):produca::all();
    }
   
    public function adddata(Request $req){
        $device = new produca();
        $device->ten = $req->ten;
        $device->anh = $req->anh;
        $device->gia = $req->gia;
        $result = $device->save();
        if($result){
             return ['Result'=>'thanh cong'];
        }else{
            return ['Result'=>'that bai'];
        } 
    }

   public function update(Request $req){
        $device = produca::find($req->id);
        $device->ten = $req->ten;
        $device->anh = $req->anh;
        $device->gia = $req->gia;
        $result = $device->save();
        if($result){
            return ['Result'=>'thanh cong'];
        }else{
            return ['Result'=>'that bai'];
        }
    }

    public function delete($id){

        $device = produca::find($id);
        $result = $device->delete();
        if($result){
            return ['Result'=>'xoa thanh cong '.$id];
        }else{
            return ['Result'=>'xoa that bai'];
        }

    }



}
