<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
    <div class="modal-dialog modal-lg" role="document">
        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
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
                        <label for="kode_barang" class="col-lg-2 col-lg-offset-1 control-label">Kode PO Barang</label>
                        <div class="col-lg-6">
                            <select name="kode_barang" id="kode_barang" class="form-control" required>
                                <option value="">Pilih Kode PO Barang</option>
                                <!-- Opsi kode barang akan dimuat melalui JavaScript -->
                            </select>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                <div class="form-group row">
                    <label for="nama_barang" class="col-lg-2 col-lg-offset-1 control-label">Nama Barang</label>
                    <div class="col-lg-6">
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control" readonly>
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
                        <input type="number" name="no_po" id="no_po" class="form-control" readonly>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_batch" class="col-lg-2 col-lg-offset-1 control-label">Batch No.</label>
                    <div class="col-lg-6">
                        <input type="text" name="no_batch" id="no_batch" class="form-control">
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="vendor" class="col-lg-2 col-lg-offset-1 control-label">Vendor</label>
                    <div class="col-lg-6">
                        <input type="text" name="vendor" id="vendor" class="form-control" readonly>
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
                        <input type="text" name="satuan" id="satuan" class="form-control" readonly>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="informasi_barang" class="col-lg-2 col-lg-offset-1 control-label">Informasi</label>
                    <div class="col-lg-6">
                        <input type="text" name="informasi_barang" id="informasi_barang" class="form-control" readonly>
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
                <div class="form-group row">
                    <label for="pic_penerima_gudang" class="col-lg-2 col-lg-offset-1 control-label">PIC Penerima Gudang</label>
                    <div class="col-lg-6">
                        <input type="text" name="pic_penerima_gudang" id="pic_penerima_gudang" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan" class="col-lg-2 col-lg-offset-1 control-label">Keterangan</label>
                    <div class="col-lg-6">
                        <input type="text" name="keterangan" id="keterangan" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penerima" class="col-lg-2 col-lg-offset-1 control-label">Penerima</label>
                    <div class="col-lg-6">
                        <input type="text" name="penerima" id="penerima" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pic_menyerahkan" class="col-lg-2 col-lg-offset-1 control-label">PIC Menyerahkan</label>
                    <div class="col-lg-6">
                        <input type="text" name="pic_menyerahkan" id="pic_menyerahkan" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pic_penerima" class="col-lg-2 col-lg-offset-1 control-label">PIC Penerima</label>
                    <div class="col-lg-6">
                        <input type="text" name="pic_penerima" id="pic_penerima" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="product_image" class="col-lg-2 col-lg-offset-1 control-label">Foto</label>
                    <div class="col-lg-6">
                        <input type="file" name="product_image" id="product_image" class="form-control" accept="image/*" required autofocus>
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





