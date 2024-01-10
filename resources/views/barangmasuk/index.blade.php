@extends('layouts.master')


@section('title')
    Daftar Barang Masuk
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Daftar Barang Masuk</li>
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
@push('scripts')
<script>
    let table;

    $(function () {
        table = $('.table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '{{ route('barangmasuk.data') }}',
            },
            columns: [
                {data: 'select_all', searchable: false, sortable: false},
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'nama_barang'},
                {data: 'nama_kategori'},
                {data: 'no_po'},
                {data: 'no_batch'},
                {data: 'vendor'},
                {data: 'stok'},
                {data: 'satuan'},
                {data: 'informasi_barang'},
                {data: 'tahun'},
                {data: 'tanggal'},
                {data: 'pic_penerima_gudang'},
                {data: 'keterangan'},
                {data: 'penerima'},
                {data: 'pic_menyerahkan'},
                {data: 'pic_penerima'},
                {data: 'product_image'},
                {data: 'kode_barang_masuk'},
                {data: 'aksi', searchable: false, sortable: false},
            ]
        });

    //     $('#modal-form').validator().on('submit', function (e) {
    //     e.preventDefault();

    //     var formData = new FormData($('#modal-form form')[0]);

    //     $.ajax({
    //         url: $('#modal-form form').attr('action'),
    //         type: 'POST',
    //         data: formData,
    //         contentType: false,
    //         processData: false,
    //         success: function(response) {
    //             $('#modal-form').modal('hide');
    //             table.ajax.reload();
    //         },
    //         error: function(errors) {
    //             alert('Tidak dapat menyimpan data');
    //         }
    //     });
    // });

    $('#modal-form').validator().on('submit', function (e) {
    e.preventDefault();

    var formData = new FormData($('#modal-form form')[0]);
    console.log([...formData]);

    $.ajax({
        url: $('#modal-form form').attr('action'),
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        cache: false,
        success: function(response) {
            $('#modal-form').modal('hide');
            table.ajax.reload();
        },
        error: function(errors) {
            console.error(errors);
            alert('Tidak dapat menyimpan data');
        }
    });
});

    });

    function addForm(url) {
    $('#modal-form').modal('show');
    $('#modal-form .modal-title').text('Tambah Barang Masuk');

    $('#modal-form form')[0].reset();
    $('#modal-form form').attr('action', url);
    $('#modal-form [name=_method]').val('post');
    $('#modal-form [name=nama_po]').focus();

    // Tambahkan kode untuk mengambil data barang
    $.get('{{ route('barangmasuk.get_po_options') }}')
        .done(function(data) {
            var selectOptions = '<option value="">Pilih Kode Barang</option>';
            $.each(data, function(key, value) {
                selectOptions += '<option value="' + key + '">' + value + '</option>';
            });
            $('#modal-form [name=kode_barang]').html(selectOptions);
        })
        .fail(function() {
            alert('Tidak dapat memuat data barang');
        });
}

// Tambahkan event handler untuk memuat informasi barang setelah memilih kode barang
    $('#modal-form [name=kode_barang]').on('change', function() {
    var selectedKodeBarang = $(this).val();
    if (selectedKodeBarang) {
        // Ajukan permintaan untuk memuat informasi barang berdasarkan kode barang
        $.get('{{ route('barangmasuk.get_po_info') }}', { kode_barang: selectedKodeBarang })
            .done(function(data) {
                // Isi informasi barang ke dalam formulir
                $('#modal-form [name=nama_barang]').val(data.nama_po);
                $('#modal-form [name=nama_kategori]').val(data.nama_kategori);
                $('#modal-form [name=informasi_barang]').val(data.spesifikasi);
                $('#modal-form [name=no_po]').val(data.no_po);
                $('#modal-form [name=vendor]').val(data.vendor);
                $('#modal-form [name=satuan]').val(data.satuan);
                // ... (isi atribut lainnya)
            })
            .fail(function() {
                alert('Tidak dapat memuat informasi barang');
            });
    } else {
        // Bersihkan informasi barang jika kode barang tidak dipilih
        $('#modal-form [name=nama_po]').val('');
        // ... (bersihkan atribut lainnya)
    }
});

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Produk');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=nama_po]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=nama_po]').val(response.nama_po);
                $('#modal-form [name=nama_kategori]').val(response.nama_kategori);
                $('#modal-form [name=no_po]').val(response.no_po);
                $('#modal-form [name=vendor]').val(response.vendor);
                $('#modal-form [name=stok]').val(response.stok);
                $('#modal-form [name=satuan]').val(response.satuan);
                $('#modal-form [name=spesifikasi]').val(response.spesifikasi);
                $('#modal-form [name=tahun]').val(response.tahun);
                $('#modal-form [name=tanggal]').val(response.tanggal);

            })
            .fail((errors) => {
                alert('Tidak dapat menampilkan data');
                return;
            });
    }

    function deleteData(url) {
        if (confirm('Yakin ingin menghapus data terpilih?')) {
            $.post(url, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'delete'
                })
                .done((response) => {
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Tidak dapat menghapus data');
                    return;
                });
        }
    }

    function deleteSelected(url) {
        if ($('input:checked').length > 1) {
            if (confirm('Yakin ingin menghapus data terpilih?')) {
                $.post(url, $('.form-produk').serialize())
                    .done((response) => {
                        table.ajax.reload();
                    })
                    .fail((errors) => {
                        alert('Tidak dapat menghapus data');
                        return;
                    });
            }
        } else {
            alert('Pilih data yang akan dihapus');
            return;
        }
    }

</script>
@endpush
