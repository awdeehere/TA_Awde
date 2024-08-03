<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\VideoPembuatan;

class VideoPembuatanController extends Controller
{

    public function index()
    {
        $data['list_video_pembuatan'] = VideoPembuatan::all();
        return view('admin.video_pembuatan.index', $data);
    }

    public function create()
    {
        return view('admin.video_pembuatan.create');
    }

    public function show($id)
    {
        return view('admin.video_pembuatan.show', [
            'video_pembuatan' => VideoPembuatan::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('admin.video_pembuatan.edit', [
            'video_pembuatan' => VideoPembuatan::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        // Tambahkan validasi
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'video' => 'required|url', // Validasi URL video
        ], [
            'judul.required' => 'Judul Harus Diisi',
            'judul.string' => 'Judul Harus Berupa Kalimat',
            'judul.max' => 'Judul Maksimal 255 Karakter',
            'deskripsi.required' => 'Deskripsi Harus Diisi',
            'deskripsi.string' => 'Deskripsi Harus Berupa Kalimat',
            'deskripsi.max' => 'Deskripsi Maksimal 255 Karakter',
            'video.required' => 'URL Video Harus Diisi',
            'video.url' => 'URL Video Tidak Valid',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        // Simpan data ke database
        $video_pembuatan = new VideoPembuatan();
        $video_pembuatan->judul = $request->judul;
        $video_pembuatan->deskripsi = $request->deskripsi;
        $video_pembuatan->video = $request->video;
        $video_pembuatan->save();

        return redirect('admin/video-pembuatan')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id, Request $request)
    {
        // Tambahkan validasi
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'video' => 'required|url', // Validasi URL video
        ], [
            'judul.required' => 'Judul Harus Diisi',
            'judul.string' => 'Judul Harus Berupa Kalimat',
            'judul.max' => 'Judul Maksimal 255 Karakter',
            'deskripsi.required' => 'Deskripsi Harus Diisi',
            'deskripsi.string' => 'Deskripsi Harus Berupa Kalimat',
            'deskripsi.max' => 'Deskripsi Maksimal 255 Karakter',
            'video.required' => 'URL Video Harus Diisi',
            'video.url' => 'URL Video Tidak Valid',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        // Update data di database
        $video_pembuatan = VideoPembuatan::find($id);
        if ($request->judul) $video_pembuatan->judul = $request->judul;
        if ($request->deskripsi) $video_pembuatan->deskripsi = $request->deskripsi;
        if ($request->video) $video_pembuatan->video = $request->video;
        $video_pembuatan->save();

        return redirect('admin/video-pembuatan')->with('success', 'Data Berhasil di Edit');
    }

    public function destroy($id)
    {
        $video_pembuatan = VideoPembuatan::find($id);
        $video_pembuatan->delete();
        return redirect('admin/video-pembuatan')->with('danger', 'Data Berhasil Dihapus');
    }
}