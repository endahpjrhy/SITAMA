<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\Bidang;
use App\Models\HasilProjek;
use App\Models\HistoryRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Excel;

class AdminController extends Controller
{
    public function index()
    {
        $data = User::where('role', '2')->get();
        return view('file.grafik', ['data' => $data]);
    }

    public function datapeserta()
    {
        $data = User::where('status', '!=', NULL)->where('role', '2')->get();
        return view('file.data_peserta', ['data' => $data]);
    }

    public function showdatapeserta(Request $request)
    {
        $id = base64_decode($request->id);
        $data = User::with('bidang')->find($id);
        $induk = Bidang::find($data->bidang->induk);
        $riwayat = HistoryRegister::where('users_id', $id)->get();

        return view('file.showdatapeserta', ['data' => $data, 'riwayat' => $riwayat, 'bidang_induk'=>$induk]);
    }

    public function ubahstatuspeserta(Request $request, User $user)
    {
        $id = $request->id;
        $user->find($id)->update([
            'status' => $request->status,
        ]);

        HistoryRegister::create([
            'users_id' => $id,
            'status' => $request->status,
            'desc' => 'Perubahan status oleh admin',
        ]);
        return redirect()->back()->with(['success' => "Berhasil Ubah Status"]);
    }

    public function exportpeserta()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function daftarhasilprojek()
    {
        $data = User::where('status', '=', '3')->where('role', '2')->get();
        return view('file.daftarhasilprojek', ['data' => $data]);
    }

    public function lihatprojekpeserta(Request $request)
    {
        $id = base64_decode($request->id);
        $data = User::find($id);
        $daftarprojek = HasilProjek::where('users_id', $id)->get();

        return view('file.showdetailprojek', ['data' => $data, 'riwayat' => $daftarprojek]);
    }
}
