<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listbarang = DB::table('barang')
            ->join('kategori', 'barang.id_kategori', '=', 'kategori.id')
            ->select('barang.*', 'kategori.kategori')
            ->get();

        return view('data', compact('listbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lastid = DB::table('barang')
            ->select('id')
            ->orderByDesc('id')
            ->limit(1)
            ->get();

        $id = $lastid[0]->id + 1;
        $kategori = DB::table('kategori')->get();
        $data = [$id, $kategori];
        return view('add', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'id_kategori' => 'required',
            'barang' => 'required',
            'stok' => 'required',
            'foto' => 'mimes:jpeg,jpg,bmp,png|max:2000'
        ]);

        $file = $request->file('foto');

        if($file) $image = $file->getClientOriginalName();
        else $image = "barang.jpg";

        $barang = Barang::create($request->all());
        $barang->id = $request->id;
        $barang->image = $image;
        $barang->save();
        if($file) $file->move(public_path('uploaded_files/barang/'),$file->getClientOriginalName());
        
        return redirect('/data')->with('status', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        Barang::destroy($barang->id);
        if($barang->image) {
            if($barang->image != "barang.jpg") File::delete(public_path('uploaded_files/barang/'.$barang->image));
        }

        return redirect('/data')->with('status', 'Data Berhasil Dihapus!');
    }

    public function search(Request $request) 
    {
        $word = $request->input('search');

        $listbarang = DB::table('barang')
            ->join('kategori', 'barang.id_kategori', '=', 'kategori.id')
            ->select('barang.*', 'kategori.kategori')
            ->where('barang.barang', 'like', '%'.$word.'%')
            ->get();

        return view('data', compact('listbarang'));
    }
}
