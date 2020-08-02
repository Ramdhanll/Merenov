<?php

namespace App\Http\Controllers;

use App\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(Request $request, $service) {
        if ($service === 'rumah') {
            return view('rumah', ['service' => $service, 'value' => 'Membangun '.$service]);
        } else if ($service === 'kostan') {
            return view('kostan', ['service' => $service, 'value' => 'Membangun '.$service]);
        } else if ($service === 'design') {
            return view('design', ['service' => $service, 'value' => 'Membuat '.$service]);
        }
    }

    public function store(Request $request) {
        $request->validate([
            'pelayanan' => 'required',
            'alamat' => 'required',
            'luas_bangunan' => 'required',
            'deskripsi' => 'required',
            'nama' => 'required',
            'no_telepon' => 'required',
            'email' => 'required',
            'jadwal_survey' => 'required',
        ]);
        service::create($request->all());
        return redirect('success');
    }
}
