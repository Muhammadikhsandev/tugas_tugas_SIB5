<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Jenis_produk;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        //produk berelasi dengan jenis_produk
        $produk = Produk::join('jenis_produk', 'jenis_produk_id', '=', 'jenis_produk.id')
        ->select('produk.*', 'jenis_produk.nama as jenis')
        ->get();
        return view ('admin.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //tambah data 
        $jenis_produk = DB::table('jenis_produk')->get();
        return view ('admin.produk.create', compact('jenis_produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required |unique:produk|max:10',
            'nama' => 'required |unique:produk|max:45',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
            'min_stok' => 'required|numeric',
            'foto' => 'nullable|image||mimes::jpg,jpeg,gif,png,svg|max:2048',
            'deskripsi' => 'nullable|string|min:10',
            'jenis_produk_id' => 'required|integer',
        ],
        [
            'kode.max' => 'kode maximal 10 karakter',
            'kode.required' => 'kode wajib  diisi',
            'kode.unique' => 'kode sudah terisi pada data yang lain',
            'nama.required' => 'nama wajib diisi',
            'harga_beli.required' => 'harga beli harus diisi',
            'harga_beli.numeric' => 'harus angka',
            'harga_jual.required' => 'harga jual harus diisi',
            'harga_jual.numeric' => 'harus angka',
            'stok.requred' => 'stok harus diisi',
            'min_stok.required' => 'minimal stok harus terisi',
            'foto.max' => 'maksimal 2 MB',
            'foto.image' => 'file ekstensi harus jpg, jpeg, gif, svg',
        ]);
        
        //proses upload foto
        if(!empty($request->foto)){
            $fileName = 'foto-' . uniqid() . '.' . $request->foto->extension();
            $request->foto->move(public_path('admin/img'), $fileName);
        } else{
            $fileName = '';
        }
        //tambah data menggunakan query builder
        DB::table('produk')->insert([
            'kode'=>$request->kode,
            'nama'=>$request->nama,
            'harga_beli'=>$request->harga_beli,
            'harga_jual'=>$request->harga_jual,
            'stok'=>$request->stok,
            'min_stok'=>$request->min_stok,
            'foto'=>$fileName,
            'deskripsi'=>$request->deskripsi,
            'jenis_produk_id'=>$request->jenis_produk_id,
        ]);
        // Alert::success('Produk', 'Berhasil Menambahkan Produk');
        return redirect('admin/produk')->with('Produk', 'Produk Berhasi Ditambahkan!');;
    }

    /**
     * Display the specified resource.
     */ 
    public function show(string $id)
    {
        //
        $produk = Produk::join('jenis_produk', 'jenis_produk_id', '=', 'jenis_produk.id')
        ->select('produk.*', 'jenis_produk.nama as jenis')
        ->where('produk.id', $id)
        ->get();
        return view ('admin.produk.detail', compact('produk'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $jenis_produk = DB::table('jenis_produk')->get();
        $produk = DB::table('produk')->where('id',$id)->get();
        return view ('admin.produk.edit', compact('produk' , 'jenis_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { 
        // try{
        $request->validate([
            'nama' => 'required |max:45',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
            'min_stok' => 'required|numeric',
            'foto' => 'nullable|image||mimes::jpg,jpeg,gif,png,svg|max:2048',
            'deskripsi' => 'nullable|string|min:10',
            'jenis_produk_id' => 'required|integer',
        ],
        [
            'nama.required' => 'nama wajib diisi',
            'harga_beli.required' => 'harga beli harus diisi',
            'harga_beli.numeric' => 'harus angka',
            'harga_jual.required' => 'harga jual harus diisi',
            'harga_jual.numeric' => 'harus angka',
            'stok.requred' => 'stok harus diisi',
            'min_stok.required' => 'minimal stok harus terisi',
            'foto.max' => 'maksimal 2 MB',
            'foto.image' => 'file ekstensi harus jpg, jpeg, gif, svg',
        ]
        
        );

        //update foto
        $foto = DB::table('produk')->select('foto')->where('id', $request->id)->get();
        foreach($foto as $f){
            $namaFileFotoLama = $f->foto;
        }
        if(!empty($request->foto)){
            //jika ada foto lama maka hapus fotonya 
        if(!empty($namaFileFotoLama->foto)) unlink('admin/img'.$namaFileFotoLama->foto);
        //proses ganti foto
        $fileName = 'foto-'.$request->id . '.' . $request->foto->extension();
        $request->foto->move(public_path('admin/img'), $fileName);
        } else {
            $fileName = '';
        }
        DB::table('produk')->where('id',$request->id)->update([
            'kode'=>$request->kode,
            'nama'=>$request->nama,
            'harga_beli'=>$request->harga_beli,
            'harga_jual'=>$request->harga_jual,
            'stok'=>$request->stok,
            'min_stok'=>$request->min_stok,
            'foto'=>$fileName,
            'deskripsi'=>$request->deskripsi,
            'jenis_produk_id'=>$request->jenis_produk_id,
        ]);
        // Alert::success('Produk', 'Mengupdate Pelanggan');
        return redirect('admin/produk')->with('success', 'Produk Berhasil update!');
    // } catch (\Exception $e){
        
    //     // Alert::error('Produk', 'Tidak mengupdate Pelanggan');
    //     return back()->with('errors', $validator->messages()->all()[0])->withInput();
    

    // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('produk')->where('id', $id)->delete();
        Alert::success('Produk', 'Berhasil Menghapus');

        return redirect('admin/produk')->withSuccess('Berhasil menghapus!');;
    }
    public function generatePDF(){
        $data = [
            'title' => 'Welcome to PDF',
            'date' => ('m/d/y')
        ];
        $pdf = PDF ::loadView('admin.produk.myPDF', $data);
        return $pdf->download('testdownload.pdf');
    }
    public function produkPDF(){
        $produk = Produk::join('jenis_produk', 'jenis_produk_id', '=', 'jenis_produk.id')
        ->select('produk.*', 'jenis_produk.nama as jenis')
        ->get();
        $pdf = PDF::loadView('admin.produk.produkPDF', ['produk' => $produk])->setPaper('a4','landscape');
        return $pdf->stream();
    }
    public function produkPDF_show(string $id){
        $produk = Produk::join('jenis_produk', 'jenis_produk_id', '=', 'jenis_produk.id')
        ->select('produk.*', 'jenis_produk.nama as jenis')
        ->where('produk.id', $id)
        ->get();
        $pdf =PDF::loadView('admin.produk.produkPDF_show', ['produk' => $produk]);
        return $pdf->stream();
    }
    
}
