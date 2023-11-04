<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController extends Controller {
    public function index() {
        $vehicles = Vehicle::all();
        return view('vehicle.index', compact('vehicles'));
    }

    public function create() {
        return view('vehicle.create');
    }

    public function store(Request $request) {
        $vehicle = new Vehicle;
        $vehicle->nama_kendaraan = $request->input('nama_kendaraan');   
        $vehicle->jenis_kendaraan = $request->input('jenis_kendaraan');   
        $vehicle->nomor_plat = $request->input('nomor_plat');   
        $vehicle->status = $request->input('status');   
        $vehicle->save();
        
        return redirect()->route('vehicle')->with('sukses', 'Data Vehicle Berhasil Ditambah');
    }

    public function show($id) {
        $vehicle = Vehicle::find($id);
        return view('vehicle.show', compact('vehicle'));
    }

    public function edit($id) {
        $vehicle = Vehicle::find($id);
        return view('vehicle.edit', compact('vehicle'));
    }

    public function update(Request $request, $id) {
        $vehicle = Vehicle::find($id);
        $vehicle->nama_kendaraan = $request->input('nama_kendaraan');   
        $vehicle->jenis_kendaraan = $request->input('jenis_kendaraan');   
        $vehicle->nomor_plat = $request->input('nomor_plat');   
        $vehicle->status = $request->input('status');   
        $vehicle->save();
        
        return redirect()->route('vehicle')->with('sukses', 'Data Vehicle Berhasil Diubah');
    }

    public function destroy($id) {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        
        return redirect()->route('vehicle')->with('sukses', 'Data Vehicle Berhasil Dihapus');
    }
}
