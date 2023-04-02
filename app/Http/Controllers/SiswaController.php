<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjekRequest;
use App\Http\Requests\RegistrasiRequest;
use App\Models\Bidang;
use App\Models\HasilProjek;
use App\Models\HistoryRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function formMagang()
    {
        $data = User::find(Auth::id());
        $bidang = Bidang::where('status', '1')->get();

        return view('file.form_magang', ['data' => $data, 'bidang'=>$bidang]);
    }

    public function ndeloksubbidang(Request $request)
    {
        $induk = $request->induk;
        $datane = Bidang::where('status', '2')->where('induk', $induk)->get();
        $isine = "<option selected value=''>Pilih Sub Bidang</option>";
        foreach ($datane as $datanemeneh) {
            $isine .= "<option value='".$datanemeneh->id."'>".$datanemeneh->nama."</option>";
        }
        return $isine;
    }

    public function prosesdaftarmagang(RegistrasiRequest $request, User $user)
    {
        # Save File Lampiran
        $FOLDER = public_path("/lampiran/surat/");
        $fileName_pdf = Auth::id() . '_' . time() . '.' . $request->file_pengantar->extension();

        $type = $request->file_pengantar->getClientMimeType();
        $size = $request->file_pengantar->getSize();

        $request->file_pengantar->move($FOLDER, $fileName_pdf);

        $data = $request->validated();
        $data['status'] = "1";
        $data['file_pengantar'] = $fileName_pdf;

        # Save File Photo
        $FOLDER_PHOTO = public_path("/lampiran/photo/");
        $fileName_photo = Auth::id() . '_' . time() . '_photo.' . $request->photo->extension();

        $type = $request->photo->getClientMimeType();
        $size = $request->photo->getSize();

        $request->photo->move($FOLDER_PHOTO, $fileName_photo);

        // $data = $request->validated();
        $data['status'] = "1";
        $data['photo'] = $fileName_photo;

        $user->find(Auth::id())->update($data);

        HistoryRegister::create([
            'users_id' => Auth::id(),
            'status' => '1',
            'desc' => 'Pendaftaran peserta magang',
        ]);

        activity()
            ->performedOn($user)
            ->causedBy(auth()->user())
            ->withProperties([
                'name' => $user->nama,
                'id' => Auth::id(),
                'table' => 'user'
            ])
            ->log('Registrasi Magang');

        return redirect('/form-magang');
    }

    public function statusPengajuan()
    {
        $data = User::find(Auth::id());
        $riwayat = HistoryRegister::where('users_id', Auth::id())->get();
        return view('file.status_pengajuan', ['data' => $data, 'riwayat' => $riwayat]);
    }

    public function hasilprojek()
    {
        $data = HasilProjek::where('users_id', Auth::id())->get();
        return view('file.hasil_projek', ['data' => $data]);
    }

    public function kirimhasilprojek(ProjekRequest $request)
    {
        $FOLDER = public_path("/lampiran/projek/");
        $fileName = Auth::id() . '_' . time() . '.' . $request->file_name->extension();

        $type = $request->file_name->getClientMimeType();
        $size = $request->file_name->getSize();
        $link = $request->link;

        $request->file_name->move($FOLDER, $fileName);

        $data = $request->validated();
        $data['file_name'] = $fileName;
        $data['file_size'] = $size;
        $data['file_type'] = $type;
        $data['link'] = $link;
        $data['users_id'] = Auth::id();

        $unit = HasilProjek::create($data);

        activity()
            ->performedOn($unit)
            ->causedBy(auth()->user())
            ->withProperties([
                'name' => $unit->judul,
                'id' => $unit->id,
                'table' => 'hasil_projek'
            ])
            ->log('Send Hasil Projek');
        return redirect()->back()->with(['success' => "Hasil projek berhasil di upload"]);
    }
}
