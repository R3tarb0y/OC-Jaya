<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Milon\Barcode\Facades\DNS1DFacade as DNS1D;

class InventoryController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $inventories = Inventory::where('nama', 'LIKE', "%$keyword%")
            ->orWhere('jenis', 'LIKE', "%$keyword%")
            ->orWhere('kategori', 'LIKE', "%$keyword%")
            ->orWhere('jumlah', 'LIKE', "%$keyword%")
            ->orWhere('status', 'LIKE', "%$keyword%")
            ->get();

        return view('inventories.index', ['inventories' => $inventories, 'keyword' => $keyword]);
    }

    public function create()
    {
        return view('inventories.create');
    }

    public function store(Request $request)
    {
        $number = mt_rand(1000000000, 9999999999);

        if ($this->productCodeExists($number)) {
            $number = mt_rand(1000000000, 9999999999);
        }

        $request['barcode'] = $number;

        $request->validate([
            'nama' => 'required|string',
            'jenis' => 'required|string',
            'kategori' => 'required|string',
            'jumlah' => 'required|integer',
            'status' => 'required|string',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // validasi untuk gambar
        ]);

        $inventory = new Inventory;
        $inventory->nama = $request->nama;
        $inventory->jenis = $request->jenis;
        $inventory->kategori = $request->kategori;
        $inventory->jumlah = $request->jumlah;
        $inventory->status = $request->status;
        $inventory->barcode = $request['barcode']; // Set the barcode field

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('public/gambar');
            $inventory->gambar = $gambarPath;
        }

        $inventory->save();

        return redirect()->route('inventory.index')->with('success', 'Inventory created successfully.');
    }

    public function productCodeExists($number){
        return Inventory::whereBarcode($number)->exists();
    }


    public function update(Request $request, Inventory $inventory)
    {
        $request->validate([
            'nama' => 'required|string',
            'jenis' => 'required|string',
            'kategori' => 'required|string',
            'jumlah' => 'required|integer',
            'status' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Menambah validasi untuk gambar
        ]);

        $data = $request->all();

        // Handle image update
        if ($request->hasFile('gambar')) {
            // Delete existing image
            Storage::disk('public')->delete($inventory->gambar);

            $imagePath = $request->file('gambar')->store('gambar_inventory', 'public');
            $data['gambar'] = $imagePath;
        }

        $inventory->update($data);

        return redirect()->route('inventories.index')
            ->with('success', 'Inventory updated successfully.');
    }

    public function destroy(Inventory $inventory)
    {
        // Delete the image if it exists
        if ($inventory->gambar) {
            Storage::disk('public')->delete($inventory->gambar);
        }

        $inventory->delete();

        return redirect()->route('inventory.index')
            ->with('success', 'Inventory deleted successfully.');
    }

    public function destroySelected(Request $request)
    {
        $selectedRows = $request->input('selectedRows');

        if (!empty($selectedRows)) {
            Inventory::whereIn('id', $selectedRows)->delete();
            return response()->json(['message' => 'Selected items deleted successfully.']);
        } else {
            return response()->json(['error' => 'No items selected for deletion.'], 400);
        }
    }

    public function printBarcode($id)
    {
        $inventory = Inventory::find($id);

        return view('inventories.printBarcode', ['inventories' => [$inventory]]);
    }
}
