@extends('layouts.master')


@section('title')
    Daftar Barang Keluar
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Daftar Barang Keluar</li>
@endsection


@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="btn-group">
                        <button onclick="addForm('{{ route('barangmasuk.store') }}')" class="btn btn-success btn-xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah</button>
                        <button onclick="deleteSelected('{{ route('barangmasuk.delete_selected') }}')" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-trash"></i> Hapus</button>
                    {{-- <button onclick="cetakBarcode('{{ route('po.cetak_barcode') }}')" class="btn btn-info btn-xs btn-flat"><i class="fa fa-barcode"></i> Cetak Barcode</button> --}}
                </div>
            </div>
            <div class="box-body table-responsive">
                <form action="" method="post" class="form-produk">
                    @csrf
                    <table class="table table-stiped table-bordered">
                        <thead>
                            <th width="5%">
                                <input type="checkbox" name="select_all" id="select_all">
                            </th>
                            <th width="5%">No</th>

                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>PO No.</th>
                            <th>Batch No.</th>
                            <th>Vendor</th>
                            <th>Stock</th>
                            <th>Satuan</th>
                            <th>Informasi</th>
                            <th>Tahun</th>
                            <th>Tanggal</th>
                            <th>Pic Penerima Gudang</th>
                            <th>Keterangan</th>
                            <th>Penerima</th>
                            <th>PIC Menyerahkan</th>
                            <th>PIC Penerima</th>
                            <th>Foto</th>
                            <th>Kode</th>
                            <th width="15%"><i class="fa fa-cog"></i></th>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

@includeIf('barangmasuk.form')
@endsection
