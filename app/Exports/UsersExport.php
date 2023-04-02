<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $records = User::where('role', '2')->where('status', '!=', NULL)->get();
        $result = array();
        $no = 1;
        foreach ($records as $record) {
            $result[] = array(
                'no' => $no,
                'nama' => $record->nama,
                'alamat' => $record->alamat,
                'nim' => $record->nim,
                'jurusan' => $record->jurusan,
                'universitas' => $record->universitas,
                'jenis_kelamin' => $record->jenis_kelamin,
                'periode_masuk' => $record->periode_masuk,
                'periode_keluar' => $record->periode_keluar,
                'telp' => $record->telp,
                'status' => status_terima()[$record->status],
                'semester' => $record->semester,
                'email' => $record->email,
            );
            $no++;
        }

        return collect($result);
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'Alamat',
            'NIM',
            'Jurusan',
            'Universitas',
            'Jenis Kelamin',
            'Periode Masuk',
            'Periode Keluar',
            'No Telp',
            'Status',
            'Semester',
            'Email'
        ];
    }
}
