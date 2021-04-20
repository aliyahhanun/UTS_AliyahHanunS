<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $buku = Buku::paginate(10);
        return view ('buku.index', ['buku' => $buku]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    { 
 
        //melakukan validasi data 
        $request->validate([ 
            'id_buku' => 'required', 
            'Judul' => 'required', 
            'Kategori' => 'required', 
            'Penerbit' => 'required', 
            'Pengarang' => 'required', 
            'Jumlah' => 'required', 
            'Status' => 'required',           
        ]); 
 
        //fungsi eloquent untuk menambah data
        Buku::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('buku.index')
            ->with('success', 'Book Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id_barang
        $buku = Buku::find($id);
        return view('buku.detail', compact('buku')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $buku = Buku::find($id_buku);
        return view('buku.edit', compact('Buku'));
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
        //melakukan validasi data 
        $request->validate([ 
            'id_buku' => 'required', 
            'Judul' => 'required', 
            'Kategori' => 'required', 
            'Penerbit' => 'required', 
            'Pengarang' => 'required', 
            'Jumlah' => 'required', 
            'Status' => 'required',    
        ]); 

        //fungsi eloquent untuk mengupdate data inputan kita
        Buku::find($id_buku)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('buku.index')
            ->with('success', 'Book Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
    Buku::find($id_buku)->delete();
    return redirect()->route('buku.index')
        -> with('success', 'Book Deleted Successfully');
    }
}
