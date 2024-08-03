<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Module\StoreRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{

    public function index()
    {
        $data['list_artikel'] = Artikel::all();
        return view('admin.artikel.index', $data);
    }

    public function create()
    {
        return view('admin.artikel.create');
    }

    public function Show($id)
    {
        return view('admin.artikel.show', [
            'artikel' => Artikel::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('admin.artikel.edit', [
            'artikel' => Artikel::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'max:255|required',
            'konten' => 'required',
            'thumbnail' => 'image|mimes:png,jpg,jpeg|max:5120|required',
        ], [
            'judul.max' => 'Judul Maksimal 255 Karakter',
            'judul.required' => 'Judul Harus Diisi',
            'konten.required' => 'Konten Harus Diisi',
            'thumbnail.image' => 'Thumbnail Harus Berupa Gambar',
            'thumbnail.mimes' => 'Thumbnail Harus Berekstensi png, jpg, atau jpeg',
            'thumbnail.max' => 'Thumbnail Tidak Boleh Lebih Dari 5 MB',
            'thumbnail.required' => 'Thumbnail Harus Diisi'
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        $artikel = new Artikel();
        $artikel->judul = request('judul');
        $artikel->slug = Str::slug($request->judul, '-');
        $artikel->konten = request('konten');
        $artikel->save();

        $artikel->handleUploadFoto();

        return redirect('admin/artikel')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'judul' => 'string|max:255|required',
            'konten' => 'required',
            'thumbnail' => 'image|mimes:png,jpg,jpeg|max:5120|required',
        ], [
            'judul.string' => 'Nama Harus Berupa Kalimat',
            'judul.max' => 'Nama Maksimal 255 Karakter',
            'judul.required' => 'Judul Harus Diisi',
            'konten.required' => 'Konten Harus Diisi',
            'thumbnail.image' => 'Gambar Harus Berupa Gambar',
            'thumbnail.mimes' => 'Gambar Harus Berekstensi png, jpg, atau jpeg',
            'thumbnail.max' => 'Gambar Tidak Boleh Lebih Dari 5 MB',
            'thumbnail.required' => 'Thumbnail Harus Diisi'
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        $artikel = Artikel::find($id);
        if (request('judul')) $artikel->judul = request('judul');
        if (request('konten')) $artikel->konten = request('konten');
        $artikel->save();

        if (request('thumbnail')) $artikel->handleUploadFoto();

        return redirect('admin/artikel')->with('success', 'Data Berhasil di Edit');
    }

    function destroy($id)
    {
        $artikel = Artikel::find($id);
        $artikel->handleDeleteFoto();
        $artikel->delete();
        return redirect('admin/artikel')->with('danger', 'Data Berhasil Dihapus');
    }
}