@extends('layouts.app')

@section('contents')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="btn-group">
                    <button onclick="addForm('{{ route('inventory.store') }}')" class="btn btn-success btn-xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah</button>
                    <button onclick="deleteSelected('{{ route('inventory.destroySelected') }}')" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-trash"></i> Hapus</button>
                    <button onclick="cetakBarcode('{{ route('inventory.printBarcode') }}')" class="btn btn-info btn-xs btn-flat"><i class="fa fa-barcode"></i> Cetak Barcode</button>
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
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Barcode</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($inventories as $inventory)
                    <tr>
                        <td >
                            <input type="checkbox" id="selectedRow_{{ $inventory->id }}" name="selectedRows[]" value="{{ $inventory->id }}">
                        </td>
                        <td>{{ $inventory->nama }}</td>
                        <td>{{ $inventory->jenis }}</td>
                        <td>{{ $inventory->jumlah }}</td>
                        <td>{{ $inventory->status }}</td>
                        <td>{{ $inventory->kategori }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $inventory->gambar) }}" alt="{{ $inventory->nama }}" style="max-width: 80px;">
                        </td>
                        <td>
                            {!! DNS1D::getBarcodeHTML("$inventory->barcode",'C128',2,40) !!}
                             {{ $inventory->barcode }}
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('inventory.edit', $inventory->id) }}">Edit</a>
                            <form action="{{ route('inventory.destroy', $inventory->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Ingin di Hapus?')">Delete</button>
                            </form>
                        </td>
                        <td>
                            <!-- Dynamic select box in each row -->

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
