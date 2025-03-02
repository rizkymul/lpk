<?php

namespace App\Http\Controllers;
use App\Models\ContentModel;

use Illuminate\Http\Request;
use DB;

class ContentController extends Controller
{
    public function viewberanda() {
        $content = ContentModel::all();
        return view('welcome', ['a'=>$content]);
    }
    public function contentUpdate(Request $request, $id) {
        ContentModel::find($id)->update([
            "masukincontent1"=>$request->content1
        ]);
        return redirect()->route('beranda')->with('success', "Data Berhasill");
    }
    public function contentEdit($id){

        return view('welcome.edit', ['content'=>ContentModel::find($id)]);
    }











    public function viewposting(){
        return view('posting'); 
    }
    public function viewpersyaratan() {
        return view('persyaratan');
    }
    public function viewkontak() {
        return view('kontak');
    }
    public function viewstruktur() {
        return view('struktur');
    }
    public function viewtentang() {
        return view('tentang');
    }
}
