<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Po;
use App\Models\Barang;

use app\Http\Helpers\helpers;

class PoController extends Controller
{

    public function index()
    {
        $kategori = Kategori::all()->pluck('nama_kategori', 'id_kategori');

        return view('po.index', compact('kategori'));
    }

    public function data()
    {
        $po = Po::with('barang')->orderBy('id_po', 'desc')->get();


        return datatables()
            ->of($po)
            ->addIndexColumn()
            ->addColumn('select_all', function ($po) {
                return '
                    <input type="checkbox" name="id_po[]" value="'. $po->id_po .'">
                ';
            })
            ->addColumn('kode_barang', function ($po) {
                return '<span class="label label-success">'. $po->kode_barang .'</span>';
            })
            ->addColumn('no_po', function ($po) {
                return ($po->no_po);
            })
            ->addColumn('tahun', function ($po) {
                return ($po->tahun);
            })
            ->addColumn('stok', function ($po) {
                return format_uang($po->stok);
            })
            ->addColumn('aksi', function ($po) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`'. route('po.update', $po->id_po) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button type="button" onclick="deleteData(`'. route('po.destroy', $po->id_po) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi', 'kode_barang', 'select_all'])
            ->make(true);
    }

    public function getBarangInfo(Request $request)
    {
    $kodeBarang = $request->input('kode_barang');
    $barangInfo = Barang::where('kode_barang', $kodeBarang)->first();
    // Mengambil data kategori berdasarkan id_kategori di tabel Barang
    $kategoriInfo = Kategori::find($barangInfo->id_kategori);

    // Menambahkan informasi kategori ke dalam data yang dikirimkan
    $barangInfo['nama_kategori'] = $kategoriInfo->nama_kategori;

    return response()->json($barangInfo);
    }

    public function getBarangOptions()
    {
        $barangOptions = Barang::pluck('kode_barang', 'kode_barang')->toArray();

        return response()->json($barangOptions);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */







    public function store(Request $request)
    {
      // Generate random ID Po (contoh: P000001)
      $lastPo = Po::latest()->first();

      // Menghitung ID Po selanjutnya
      $newPoId = $lastPo ? $lastPo->id_po + 1 : 1;

      // Format ID Po dengan tambahan nol di depan
      $randomPoId = 'P' . str_pad($newPoId, 6, '0', STR_PAD_LEFT);

      // Mencari barang berdasarkan kode_barang
      $barang = Barang::where('kode_barang', $request['kode_barang'])->first();

      // Jika barang ditemukan
      if ($barang) {
          // Mengisi 'id_barang' dari hasil pencarian
          $request['id_barang'] = $barang->id_barang;

          // Mengisi 'kode_barang' dengan ID Po yang dihasilkan secara berurutan
          $request['kode_barang'] = $randomPoId;

          // Membuat objek Po baru
          $po = Po::create($request->all());

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
        $po = Po::find($id);

        return response()->json($po);
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
        $po = Po::find($id);
        $po->update($request->except(['nama_kategori', 'kode_barang'])); // Update kecuali 'nama_kategori' dan 'kode_barang'

        // Setelah mengupdate, tambahkan 'nama_kategori' berdasarkan 'kode_barang'
        $kategoriInfo = Kategori::find($request->kode_barang);
        $po->nama_kategori = $kategoriInfo->nama_kategori;
        $po->save();

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
        $po = Po::find($id);
        $po->delete();

        return response(null, 204);
    }

    public function deleteSelected(Request $request)
    {
        foreach ($request->id_po as $id) {
            $po = Po::find($id);
            $po->delete();
        }

        return response(null, 204);
    }

    // public function cetakBarcode(Request $request)
    // {
    //     $dataproduk = array();
    //     foreach ($request->id_produk as $id) {
    //         $produk = Produk::find($id);
    //         $dataproduk[] = $produk;
    //     }

    //     $no  = 1;
    //     $pdf = PDF::loadView('produk.barcode', compact('dataproduk', 'no'));
    //     $pdf->setPaper('a4', 'potrait');
    //     return $pdf->stream('produk.pdf');
    // }

}
