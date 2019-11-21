<!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Halaman Data Masjid</h1>
        <a href="" class="btn btn-social btn-flat btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block mb-2" data-toggle="modal" data-target="#tambahdata" title="Tambah Data"><i class="fa fa-plus"></i> Tambah Masjid</a>  
        <div class="table-responsive">
            <table class="table table-bordered table-striped dataTable table-hover nowrap" id="data">
                <thead class="bg-gray disabled color-palette">
                    <tr>
                        <th></th>
                        <th>No</th>
                        <th >Nama</th>
                        <th >Alamat</th>
                        <th >Phone</th>
                        <th >Lanitude</th>
                        <th >Longitude</th>
                        <th >Gambar</th>
                        <th >Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>Masjid Baiturrahman</td>
                        <td>Pejongah Kelebuh, Praya Tengah, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83582</td>
                        <td>0819-5918-1020</td>
                        <td>-8.735318</td>
                        <td>116.347420</td>
                        <td>default.jpg</td>
                        <td>
                            <a href="" class="btn btn-social btn-flat btn-warning btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block mb-2" title="Ubah Data"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-social btn-flat btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block mb-2" title="Hapus Data"><i class="fa fa-trash"></i></a>                        
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!-- /.container-fluid -->

    <!-- modal tambah -->
        <!-- Modal -->
        <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Input Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="">Nama Masjid</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="number" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Lanitude</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Longitude</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" class="form-control-file" id="">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>
        </div>

    <!-- akhir modal tambah -->

</div>
<!-- End of Main Content -->

           