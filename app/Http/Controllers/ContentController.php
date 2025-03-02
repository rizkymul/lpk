<?php

namespace App\Http\Controllers;

use App\Models\ContentModel;

use Illuminate\Http\Request;
use DB;

class ContentController extends Controller
{
    public function viewberanda()
    {
        $getContent = ContentModel::all();
        return view('welcome', [
            'content' => $getContent
        ]);
    }

    public function contentEdit($id)
    {
        return view('content.edit', ['content' => ContentModel::find($id)]);
    }

    public function contentUpdate(Request $request, $id)
    {
        $data = ContentModel::findOrfail($id);
        $data->update([
            'content1' => $request->content1,
            'content2' => $request->content2,
            'content3' => $request->content3
        ]);

        return redirect()->route('beranda')->with('success', 'Berhasil Update Content');
    }











    public function viewposting()
    {
        return view('posting');
    }
    public function viewpersyaratan()
    {
        return view('persyaratan');
    }
    public function viewkontak()
    {
        return view('kontak');
    }
    public function viewstruktur()
    {
        return view('struktur');
    }
    public function viewtentang()
    {
        return view('tentang');
    }
}
