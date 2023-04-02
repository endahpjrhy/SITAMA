<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrasiRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('file.dashboard');
    }

    public function profile()
    {
        $data = User::find(Auth::id());
        return view('file.profile', ['data'=>$data]);
    }

    public function prosesupdateprofile(Request $sikdikirim, User $ikimodel)
    {
        $pesan = [
            "nama.required"=>":attribute Kolom Wajib Diisi",
            "*.confirmed"=>":attribute tidak cocok",
            "*.min"=>":attribute minimal 6 karakter"
        ];
        
        if ($sikdikirim->password == NULL) {
            $cekgantipasswordtidak = [
                'nama'=>'required',
            ];
            $ganti = false;
        } else {
            $cekgantipasswordtidak = [
                'nama'=>'required',
                'password' => 'confirmed|min:6',
            ];
            $ganti = true;
        }
        

        $validasidulu = $sikdikirim->validate($cekgantipasswordtidak,$pesan);

        if($ganti){
            $validasidulu['password']= Hash::make($validasidulu['password']);
        }

        $ikimodel->find(Auth::id())->update($validasidulu);

        activity()
        ->performedOn($ikimodel)
        ->causedBy(auth()->user())
        ->withProperties([
            'name' => $validasidulu['nama'],
            'id' => Auth::id(),
            'table' => 'User'
        ])
        ->log('Ganti Password');

        return redirect()->back()->with(['isoh'=>"Profil Berhasil di Update!"]);
    }
}
