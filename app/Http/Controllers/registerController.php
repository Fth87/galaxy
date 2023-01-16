<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use Illuminate\Support\Facades\Hash;




class registerController extends Controller
{


    public function index()
    {

        return view("registernew", [
            "dt" => 'register'
        ]);
    }


    public function store(Request $request)
    {
        function generateRandomNumber($length)
        {
            $random = str_pad(rand(0, pow(10, $length) - 1), $length, '0', STR_PAD_LEFT);
            return $random;
        }

        $validatedData = $request->validate([
            "nama" => "required|max:255",
            // "username" => "required|max:255|unique:users",
            "telp" => "required|digits_between:11,12",
            "nisn" => "required|unique:users|min:10",
            "sekolah" => "required",
            "image" => "required|image|file|max:1024",
            "email" => "required|email:dns",
            "password" => "required|min:6|confirmed",
            'password_confirmation' => "required",
            "jk" => "required",
            "type" => "required",
            "kode" => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] =  $request->file('image')->store('twibbon-image');
        }

        $kode = generateRandomNumber(3);
        // $cek_kode = $this->$user->kode($kode);
        $cek_kode = User::where('kode', $kode)->exists();
        while ($cek_kode) {
            $kode = generateRandomNumber(3);
        }

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['kode'] = generateRandomNumber(3);
        // $request->session()->flash('success','Pendaftaran berhasil, Silahkan login!');

        User::create($validatedData);
        return redirect(url('login'))->with('success', 'Pendaftaran berhasil, Silahkan login!');
    }
    public function export()
    {

        // return Excel::download(new UsersExport, 'users.xlsx');
        $users = User::all();
        return Excel::download(new UsersExport($users), 'users.xlsx');
    }
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx'
        ]);



        // _____________________________Upload data_________________________________________________

        $data = $request->file('file');
        $namaFile = $data->getClientOriginalName();
        $data->move('userData', $namaFile);
        Excel::import(new UsersImport, \public_path('/userData/' . $namaFile));

        // Return success message
        return redirect('/dashboard/admin')->with('success', 'data berhasil di import');
    }

    public function importUpdate(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx'
        ]);


        // _____________________________Update data_________________________________________________
        $path = $request->file('file')->store('temp');
        $data = Excel::toArray(new UsersImport, $path);
        $data = $data[0];
        foreach ($data as $key => $value) {
            if ($value[0] != null) {
                User::where('nisn', $value[15])->update([
                    'nama' => $value[0],
                    'username' => $value[1],
                    'telp' => $value[2],
                    'sekolah' => $value[3],
                    'jk' => $value[4],
                    'type' => $value[5],
                    'image' => $value[6],
                    'email' => $value[7],
                    'nomor_peserta' => $value[8],
                    'password_peserta' => $value[9],
                    'is_admin' => $value[10],
                    'status_pembayaran' => $value[11],
                    'is_lolos' => $value[12],
                    'kode' => $value[13],
                    'password' => Hash::make($value[14]),
                    'nisn' => $value[15],
                ]);
            }
        }

        // Return success message
        return redirect('/dashboard/admin')->with('success', 'data berhasil di Update');
    }


    public function destroy(User $id)
    {

        $user = User::find($id);
        // dd($user[0]->image);
        $path = public_path() . '/storage' . '/' . $user[0]->image;
        if (file_exists($path)) {
            unlink($path);
        }
        // $user->delete();
        User::destroy($user->pluck('id')->toArray());
        return redirect('/dashboard/admin')->with('success', 'Data has been deleted.');
    }
}
