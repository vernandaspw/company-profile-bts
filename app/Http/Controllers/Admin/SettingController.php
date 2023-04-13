<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('pages.admin.setting', compact('setting'));
    }

    public function ubah(Request $req)
    {
        $setting = Setting::first();
        if ($req->logo) {
            if ($setting->logo) {
                Storage::delete($setting->logo);
            }
            $logo = $req->logo->store('img');
        } else {
            $logo = $req->logo;
        }
        $ubah = $setting->update([
            'perusahaan' => $req->perusahaan,
            'logo' => $logo,
            'singkat' => $req->singkat,
            // 'tentang' =>
            'alamat' => $req->alamat,
            'iframe' => $req->iframe,
            'email' => $req->email,
        ]);

        return redirect('admin/setting')->with('success', 'berhasil perbarui data');
    }
}
