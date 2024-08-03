<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Artikel;
use App\Models\Admin\Penghargaan;
use App\Models\Admin\Pengrajin;
use App\Models\Admin\Sejarah;
use App\Models\Admin\Produk;
use App\Models\Admin\Tentang;
use App\Models\Admin\i\Info;
use App\Models\Admin\VideoPembuatan;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function home()
    {
        $artikel = Artikel::orderBy('updated_at', 'desc')->take(3)->get();

        return view('frontview.home', compact('artikel'));
    }

    function galeri()
    {
        $penghargaan = Penghargaan::all();
        $pengrajin = Pengrajin::all();
        $video_pembuatan = VideoPembuatan::all();
        return view('frontview.galeri', compact( 'video_pembuatan', 'penghargaan', 'pengrajin'));
    }

    function katalog()
    {
        $produk = Produk::with('carousels')->get();
        return view('frontview.katalog', compact('produk'));
    }

    function about()
    {
        $tentang = Tentang::first();
        return view('frontview.about', compact('tentang'));
    }

    function artikel($slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();

        return view('frontview.artikel', compact('artikel'));
    }

    function info()
    {
        $sejarah = Sejarah::first();
        return view('frontview.info', compact('sejarah'));
    }
}