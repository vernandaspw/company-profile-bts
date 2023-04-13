<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $produk = Product::latest()->get();
        return view('pages.admin.produk', compact('produk'));
    }

    public function tambahView()
    {
        return view('pages.admin.produk-tambah');
    }

    public function store(Request $req)
    {
        $req->validate([
            'cover' => 'image',
            'logo' => 'image',
            'deskripsi' => 'required',
            'url' => 'nullable',
        ]);

        if ($req->cover) {
            $cover = $req->cover->store('img');
        }
        if ($req->logo) {
            $logo = $req->logo->store('img');
        }

        $store = Product::create([
            'cover' => $cover,
            'logo' => $logo,
            'deskripsi' => $req->deskripsi,
            'url' => $req->url,
        ]);

        return redirect('admin/produk')->with('success', 'berhasil simpan data');
    }

    public function delete($id)
    {
        $data = Product::find($id);
        if ($data) {
            if ($data->cover) {
                Storage::delete($data->cover);
            }
            if ($data->logo) {
                Storage::delete($data->logo);
            }
            $data->delete();
        }

        return redirect('admin/produk')->with('success', 'berhasil hapus data');
    }
}