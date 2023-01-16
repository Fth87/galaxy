<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $users = User::all();
        $users = User::query();
        $users = $users->get();


        $countMipa = User::where('type', 'mipa')->count();
        $countIps = User::where('type', 'ips')->count();
        $countPai = User::where('type', 'pai')->count();
        $countInggris = User::where('type', 'inggris')->count();


        // return view('adminNew.admin', ['users' => $users]);
        return view('adminNew.admin', ['countMipa' => $countMipa, 'countIps' => $countIps, 'countPai' => $countPai, 'countInggris' => $countInggris,], compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->nisn = $request->nisn;
        $user->telp = $request->telp;
        $user->sekolah = $request->sekolah;
        $user->jk = $request->jk;
        $user->type = $request->type;
        $user->image = $request->image;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->nomor_peserta = $request->nomor_peserta;
        $user->password_peserta = $request->password_peserta;
        $user->is_lolos = $request->is_lolos;
        $user->kode = $request->kode;

        $user->save();

        return redirect(url('dashboard/admin'))->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
    public function verifyPayment($id)
    {
        $transaction = User::find($id);
        $transaction->status_pembayaran = 1;
        $transaction->save();
        return redirect(url('dashboard/admin'))->with('success', 'Pembayaran berhasil diverifikasi');
    }

    public function unverify($id)
    {
        $transaction = User::find($id);
        $transaction->status_pembayaran = 0;
        $transaction->save();
        return redirect(url('dashboard/admin'))->with('success', 'Verifikasi pembayaran dibatalkan');
    }
}
