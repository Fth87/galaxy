<?php

namespace App\Imports;

use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

use function App\Http\Controllers\generateRandomNumber;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    function generateRandomNumber($length)
    {
        $random = str_pad(rand(0, pow(10, $length) - 1), $length, '0', STR_PAD_LEFT);
        return $random;
    }



    public function model(array $row)
    {
        $kode = generateRandomNumber(3);
        // $cek_kode = $this->$user->kode($kode);
        $cek_kode = User::where('kode', $kode)->exists();
        while ($cek_kode) {
            $kode = generateRandomNumber(3);
        }

        return new User([
            'nama' => $row[0],
            'username' => $row[1],
            'telp' => $row[3],
            'sekolah' => $row[4],
            'jk' => $row[5],
            'type' => $row[6],
            'image' => $row[7],
            'email' => $row[8],
            'nomor_peserta' => $row[9],
            'password_peserta' => $row[10],
            'is_admin' => $row[11],
            'status_pembayaran' => $row[12],
            'is_lolos' => $row[13],
            'kode' => $kode,
            'password' => Hash::make($row[15]),
        ]);
    }
}
