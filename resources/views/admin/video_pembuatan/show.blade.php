<x-app>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL VIDEO PEMBUATAN
        </h5>
    </div>
    <a href="{{ url('admin/video-pembuatan') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i>
        Kembali</a>
    <div class="card">
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        @if ($video_pembuatan->video)
                            @if (Str::contains($video_pembuatan->video, 'youtube.com') || Str::contains($video_pembuatan->video, 'youtu.be'))
                                <?php
                                // Ekstraksi ID Video YouTube
                                $youtubeId = null;
                                if (preg_match('/youtube\.com.*(\?v=|\/embed\/)(.{11})/', $video_pembuatan->video, $matches)) {
                                    $youtubeId = $matches[2];
                                } elseif (preg_match('/youtu.be\/(.{11})/', $video_pembuatan->video, $matches)) {
                                    $youtubeId = $matches[1];
                                }
                                ?>
                                @if ($youtubeId)
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $youtubeId }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                @else
                                    <p>ID Video YouTube tidak valid.</p>
                                @endif
                            @else
                                <video width="560" height="315" controls>
                                    <source src="{{ url('public') }}/{{$video_pembuatan->video}}" type="video/mp4">
                                    Browser Anda tidak mendukung tag video.
                                </video>
                            @endif
                        @else
                            <p>Video tidak tersedia.</p>
                            <img src="{{ url('path/to/default-thumbnail.jpg') }}" alt="Thumbnail tidak tersedia" width="560" height="315">
                        @endif
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <dt class="font-weight-bold">JUDUL</dt>
                    <dd>{{ $video_pembuatan->judul }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">DESKRIPSI</dt>
                    <dd>{{ $video_pembuatan->deskripsi }}</dd>
                </div>
            </div>
        </div>
    </div>
</x-app>
