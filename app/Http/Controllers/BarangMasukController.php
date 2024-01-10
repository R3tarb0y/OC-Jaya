<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Po;
use App\Models\Barang;
use App\Models\BarangMasuk;

class BarangMasukController extends Controller
{
    public function index()
    {
        $po = Po::all()->pluck('no_po', 'id_po');
        $kategori = Kategori::all()->pluck('nama_kategori', 'id_kategori');

        return view('barangmasuk.index', compact('po', 'kategori'));
    }

    public function data()
    {
        $barang = BarangMasuk::with('po')->orderBy('id_barang_masuk', 'desc')->get();

        return datatables()
            ->of($barang)
            ->addIndexColumn()
            ->addColumn('select_all', function ($barang) {
                return '
                    <input type="checkbox" name="id_barang_masuk[]" value="' . $barang->id_barang_masuk . '">
                ';
            })
            ->addColumn('kode_barang_masuk', function ($barang) {
                return '<span class="label label-success">'. $barang->kode_barang .'</span>';
            })
            ->addColumn('no_po', function ($barang) {
                return ($barang->po->no_po);
            })
            ->addColumn('tahun', function ($barang) {
                return ($barang->tahun);
            })
            ->addColumn('stok', function ($barang) {
                return format_uang($barang->stok);
            })
            ->addColumn('aksi', function ($barang) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`' . route('barangmasuk.update', $barang->id_barang_masuk) . '`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button type="button" onclick="deleteData(`' . route('barangmasuk.destroy', $barang->id_barang_masuk) . '`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi', 'kode_barang_masuk', 'select_all'])
            ->make(true);
    }

    public function getPoInfo(Request $request)
    {
        $kodeBarang = $request->input('kode_barang');
        $poInfo = Po::where('kode_barang', $kodeBarang)->first();

        return response()->json($poInfo);
    }

    public function getPoOptions()
    {
        $poOptions = Po::pluck('kode_barang', 'kode_barang')->toArray();

        return response()->json($poOptions);
    }

    public function store(Request $request)
    {




        $barangMasuk = new BarangMasuk();

        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('barang'); // Sesuaikan dengan path yang diinginkan
            $image->move($destinationPath, $imageName);

            // Simpan path file ke dalam basis data
            $barangMasuk->product_image = $imageName;
        }
        $lastPo = BarangMasuk::latest()->first();
        $newPoId = $lastPo ? $lastPo->id_barang_masuk + 1 : 1;
        $randomPoId = 'P' . str_pad($newPoId, 6, '0', STR_PAD_LEFT);

        $po = Po::where('kode_barang', $request['kode_barang'])->first();

        if ($po) {
            $request['id_po'] = $po->id_po;
            $request['kode_barang'] = $randomPoId;


            // Gunakan fill untuk mengisi model BarangMasuk dengan data dari request
            $barangMasuk->fill($request->all());

            // Simpan data ke database
            $barangMasuk->save();

            // Memberikan respons sukses
            return response()->json('Data berhasil disimpan', 200);
        } else {
            // Jika barang tidak ditemukan, memberikan respons error
            return response()->json('Barang not found', 404);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Po::find($id);

        return response()->json($barang);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = BarangMasuk::find($id);
        $barang->update($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = BarangMasuk::find($id);
        $barang->delete();

        return response(null, 204);
    }

    public function deleteSelected(Request $request)
    {
        foreach ($request->id_barang as $id) {
            $barang = BarangMasuk::find($id);
            $barang->delete();
        }

        return response(null, 204);
    }

    // public function cetakBarcode(Request $request)
    // {
    //     $databarang= array();
    //     foreach ($request->id_produk as $id) {
    //         $produk = Barang::find($id);
    //         $databarang[] = $barang;
    //     }

    //     $no  = 1;
    //     $pdf = PDF::loadView('produk.barcode', compact('dataproduk', 'no'));
    //     $pdf->setPaper('a4', 'potrait');
    //     return $pdf->stream('produk.pdf');
    // }

}
