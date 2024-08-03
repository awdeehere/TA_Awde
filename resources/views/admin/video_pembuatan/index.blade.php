<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">VIDEO PEMBUATAN</h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('admin/video-pembuatan/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i>
                Tambah
                Data</a>
            <table id="data-table" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th style="color: white;" width=" 10px" class="text-center">NO</th>
                    <th style="color: white;" width=" 90px" class="text-center">AKSI</th>
                    <th style="color: white;" class="text-center">JUDUL</th>
                    {{-- <th style=" color: white;" class="text-center">VIDEO</th> --}}
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_video_pembuatan->sortByDesc('created_at')->values() as $video_pembuatan)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-template.button.info-button url="admin/video-pembuatan" id="{{ $video_pembuatan->id }}" />
                                    <x-template.button.edit-button url="admin/video-pembuatan" id="{{ $video_pembuatan->id }}" />
                                    <x-template.button.delete-button url="admin/video-pembuatan" id="{{ $video_pembuatan->id }}" />
                                </div>
                            </td>
                            <td class="text-center">{{ $video_pembuatan->judul }}</td>
                            {{-- <td class="text-center">
                                @if ($video_pembuatan->video)
                                    <img src="{{ url('public') }}/{{$video_pembuatan->video}}" alt="{{ $video_pembuatan->judul }}"
                                        style="max-width: 60px; max-height: 60px;">
                                @endif
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>
