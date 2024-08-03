<?php

namespace App\Models\Admin;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class VideoPembuatan extends ModelAuthenticate
{
    protected $table = 'video_pembuatan';

    protected $fillable = [
        'video',
        'judul',
        'deskripsi',
    ];

    function handleUploadVideo()
    {
        $this->handleDeleteVideo();
        if (request()->hasFile('video')) {
            $video = request()->file('video');
            $destination = "file/video";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $video->extension();
            $url = $video->storeAs($destination, $filename);
            $this->video = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteVideo()
    {
        $video = $this->video;
        if ($video) {
            $path = public_path($video);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}