<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Module\StoreRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\Produk;
use App\Models\Admin\ProdukCarousel;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function index()
    {
        $data['list_produk'] = Produk::all();
        return view('admin.produk.index', $data);
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function Show($id)
    {
        return view('admin.produk.show', [
            'produk' => Produk::with('carousels')->findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('admin.produk.edit', [
            'produk' => Produk::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_motif' => 'required|string|max:255',
            'deskripsi' => 'required',
            'foto' => 'required|max:5120',
            'hak_cipta' => 'required',
            'warna' => 'required',
            'cara_perawatan' => 'required',
            'jenis_produk' => 'required',
            'lebar_kain' => 'required',
            
        ], [
            'nama_motif.required' => 'Nama Harus Diisi',
            'nama_motif.string' => 'Nama Harus Berupa Kalimat',
            'nama_motif.max' => 'Nama Maksimal 255 Karakter',
            'deskripsi.required' => 'Deskripsi Harus Diisi',
            'foto.required' => 'Gambar Harus Diisi',
            // 'foto.image' => 'Gambar Harus Berupa Gambar',
            // 'foto.mimes' => 'Gambar Harus Berekstensi png, jpg, atau jpeg',
            'foto.max' => 'Gambar Tidak Boleh Lebih Dari 5 MB',
            'hak_cipta.required' => 'Hak Cipta Harus Diisi',
            'warna.required' => 'Warna Harus Diisi',
            'cara_perawatan.required' => 'Cara Perawatan Harus Diisi',
            'jenis_produk.required' => 'Jenis Produk Harus Diisi',
            'lebar_kain.required' => 'Lebar Kain Harus Diisi',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        $produk = new Produk();
        $produk->nama_motif = request('nama_motif');
        $produk->hak_cipta = request('hak_cipta');
        $produk->warna = request('warna');
        $produk->lebar_kain = request('lebar_kain');
        $produk->jenis_produk = request('jenis_produk');
        $produk->cara_perawatan = request('cara_perawatan');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        $id_produk = $produk->id;
        $produk = new ProdukCarousel();
        $produk->handleUploadImage($id_produk);

        return redirect('admin/produk')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama_motif' => 'required|string|max:255',
            'deskripsi' => 'required',
            'hak_cipta' => 'required',
            'warna' => 'required',
            'cara_perawatan' => 'required',
            'jenis_produk' => 'required',
            'lebar_kain' => 'required',
            
        ], [
            'nama_motif.required' => 'Nama Harus Diisi',
            'nama_motif.string' => 'Nama Harus Berupa Kalimat',
            'nama_motif.max' => 'Nama Maksimal 255 Karakter',
            'deskripsi.required' => 'Deskripsi Harus Diisi',
            // 'foto.image' => 'Gambar Harus Berupa Gambar',
            // 'foto.mimes' => 'Gambar Harus Berekstensi png, jpg, atau jpeg',
            'foto.max' => 'Gambar Tidak Boleh Lebih Dari 5 MB',
            'hak_cipta.required' => 'Hak Cipta Harus Diisi',
            'warna.required' => 'Warna Harus Diisi',
            'cara_perawatan.required' => 'Cara Perawatan Harus Diisi',
            'jenis_produk.required' => 'Jenis Produk Harus Diisi',
            'lebar_kain.required' => 'Lebar Kain Harus Diisi',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        $produk = Produk::find($id);
        if (request('nama')) $produk->nama_motif = request('nama');
        if (request('hak_cipta')) $produk->hak_cipta = request('hak_cipta');
        if (request('warna')) $produk->warna = request('warna');
        if (request('lebar_kain')) $produk->lebar_kain = request('lebar_kain');
        if (request('jenis_produk')) $produk->jenis_produk = request('jenis_produk');
        if (request('deskripsi')) $produk->deskripsi = request('deskripsi');
        if (request('cara_perawatan')) $produk->cara_perawatan = request('cara_perawatan');
        $produk->save();

        // if (request('foto')) $id_produk = $produk->id;
        // $produk = new ProdukCarousel();
        // $produk->handleUploadImage($id_produk);

        return redirect('admin/produk')->with('success', 'Data Berhasil di Edit');
    }

    function destroy($id)
    {
        $produk = Produk::find($id);
        $carousel = new ProdukCarousel();
        $carousel->handleDeleteImage($produk->id);
        $produk->delete();
        return redirect('admin/produk')->with('danger', 'Data Berhasil Dihapus');
    }
}