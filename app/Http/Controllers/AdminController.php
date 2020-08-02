<?php

namespace App\Http\Controllers;

use App\service;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function service() {
        $services = service::all();
        return view('admin.service', [
            'services' => $services
        ]);
    }

    public function show($id) {
        $service = service::find($id);

        return view('admin.show', ['service' => $service]);
    }

    public function destroy($id) {
        service::destroy($id);
        return redirect('admin/service');
    }
}
