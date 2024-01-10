<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
    <div class="modal-dialog modal-lg" role="document">
        <form action="" method="post" class="form-horizontal">
            @csrf
            @method('post')

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="kode_barang" class="col-lg-2 col-lg-offset-1 control-label">Kode Barang</label>
                        <div class="col-lg-6">
                            <select name="kode_barang" id="kode_barang" class="form-control" required>
                                <option value="">Pilih Kode Barang</option>
                                <!-- Opsi kode barang akan dimuat melalui JavaScript -->
                            </select>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                <div class="form-group row">
                    <label for="nama_po" class="col-lg-2 col-lg-offset-1 control-label">Nama Barang</label>
                    <div class="col-lg-6">
                        <input type="text" name="nama_po" id="nama_po" class="form-control" readonly>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_kategori" class="col-lg-2 col-lg-offset-1 control-label">Kategori</label>
                    <div class="col-lg-6">
                        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" readonly>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_po" class="col-lg-2 col-lg-offset-1 control-label">PO No.</label>
                    <div class="col-lg-6">
                        <input type="number" name="no_po" id="no_po" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="vendor" class="col-lg-2 col-lg-offset-1 control-label">Vendor</label>
                    <div class="col-lg-6">
                        <input type="text" name="vendor" id="vendor" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stok" class="col-lg-2 col-lg-offset-1 control-label">Stock</label>
                    <div class="col-lg-6">
                        <input type="number" name="stok" id="stok" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="satuan" class="col-lg-2 col-lg-offset-1 control-label">Satuan</label>
                    <div class="col-lg-6">
                        <input type="text" name="satuan" id="satuan" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="spesifikasi" class="col-lg-2 col-lg-offset-1 control-label">Informasi</label>
                    <div class="col-lg-6">
                        <input type="text" name="spesifikasi" id="spesifikasi" class="form-control" readonly>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tahun" class="col-lg-2 col-lg-offset-1 control-label">Tahun</label>
                    <div class="col-lg-6">
                        <input type="number" name="tahun" id="tahun" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal" class="col-lg-2 col-lg-offset-1 control-label">Tanggal</label>
                    <div class="col-lg-6">
                        <input type="date" name="tanggal" id="tanggal" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
            </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button type="button" class="btn btn-sm btn-flat btn-warning" data-dismiss="modal">
                        <i class="fa fa-arrow-circle-left"></i> Batal
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>





