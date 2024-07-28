<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">VIDEO PEMBUATAN</h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('admin/sejarah/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="data-table" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th style="color: white;" width=" 10px" class="text-center">NO</th>
                    <th style="color: white;" width=" 90px" class="text-center">AKSI</th>
                    <th style="color: white;" class="text-center">GAMBAR</th>
                    <th style=" color: white;" class="text-center">DESKRIPSI</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="admin/master-data/pegawai" id="" />
                                <x-template.button.edit-button url="admin/master-data/pegawai" id="" />
                                <x-template.button.delete-button url="admin/master-data/pegawai" id="" />
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app>