<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
    {
        $partner = Partner::latest()->get();
        return view('pages.admin.partner', compact('partner'));
    }

    public function tambahView()
    {
        return view('pages.admin.partner-tambah');
    }

    public function store(Request $req)
    {
        $req->validate([
            'img' => 'image',
            'url' => 'nullable',
        ]);

        if ($req->img) {
            $img = $req->img->store('img');
        }

        $store = Partner::create([
            'img' => $img,
            'url' => $req->url,
        ]);

        return redirect('admin/partner')->with('success', 'berhasil simpan data');
    }

    public function delete($id)
    {
        $data = Partner::find($id);
        if ($data) {
            if ($data->img) {
                Storage::delete($data->img);
            }
            $data->delete();
        }

        return redirect('admin/partner')->with('success', 'berhasil hapus data');
    }

}