<?php

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

function status_terima()
{
    return array(
        1 => 'Belum Dikonfirmasi',
        'Dikonfirmasi',
        'Diterima',
        'Ditolak',
    );
}

function tgl_indo_c($tanggal)
{
    return Carbon\Carbon::parse($tanggal, 'UTC')->isoFormat('dddd, D MMMM Y');
}

function bulanIndonesia($tanggal)
{
    return Carbon\Carbon::parse($tanggal, 'UTC')->isoFormat('D MMMM Y');
}

function user($param)
{
    $data = User::select($param)->where('id', Auth::id())->first();
    return $data->$param;
}

function kelamin()
{
    return array('Laki-laki', 'Perempuan');
}

function role()
{
    return array(
        1 => "Super Admin",
        "Mahasiswa"
    );
}
