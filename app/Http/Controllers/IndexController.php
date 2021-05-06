<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Harga;

class IndexController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function dPrint(){
        return view('printd');
    }
    public function getBarang(){
        $data['barang'] = Barang::all();
        return view('tbarang',$data);
    }
    public function addBarang(Request $request){
        $db = new Barang;
        $db->nama = $request->nama;
        $db->barcode = $request->barcode;
        $db->save();
        return true;
    }
    public function delBarang(Request $request){
        Barang::find($request->id)->delete();
        return true;
    }
    public function getHarga(Request $request){
        // return $request->id;
        $harga = Barang::find($request->id);
        return json_encode($harga->harga);
    }
    public function addHarga(Request $request){
        $db = new Harga;
        $db->barang_id = $request->id;
        $db->harga = $request->harga;
        $db->save();
        return true;
    }
    public function delHarga(Request $request){
        $db = Harga::find($request->id);
        $db->delete();
        return true;
    }
}
