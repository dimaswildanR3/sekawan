<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FuelConsumption;
use App\Vehicle;

class FuelConsumptionController extends Controller {
    public function index() {
        $fuelConsumptions = FuelConsumption::all();
        return view('FuelConsumption.index', compact('fuelConsumptions'));
    }

    public function create() {
        $Vehicle = \App\Vehicle::get();
        return view('FuelConsumption.create',compact(['Vehicle','Vehicle' => $Vehicle,]));
    }

    public function store(Request $request) {
        $fuelConsumption = new FuelConsumption;
        $fuelConsumption->id_vehicle = $request->input('id_vehicle');
        $fuelConsumption->tanggal_pengisian = $request->input('tanggal_pengisian');
        $fuelConsumption->jumlah_liter = $request->input('jumlah_liter');
        $fuelConsumption->kilometer_awal = $request->input('kilometer_awal');
        $fuelConsumption->kilometer_akhir = $request->input('kilometer_akhir');
        $fuelConsumption->save();

        return redirect()->route('fuelConsumption')->with('success', 'Fuel Consumption Added');
    }

    public function show($id) {
        $fuelConsumption = FuelConsumption::find($id);
        return view('FuelConsumption.show', compact('fuelConsumption'));
    }

    public function edit($id) {
        $fuelConsumption = FuelConsumption::find($id);
        return view('FuelConsumption.edit', compact('fuelConsumption'));
    }

    public function update(Request $request, $id) {
        $fuelConsumption = FuelConsumption::find($id);
        $fuelConsumption->id_vehicle = $request->input('id_vehicle');
        $fuelConsumption->tanggal_pengisian = $request->input('tanggal_pengisian');
        $fuelConsumption->jumlah_liter = $request->input('jumlah_liter');
        $fuelConsumption->kilometer_awal = $request->input('kilometer_awal');
        $fuelConsumption->kilometer_akhir = $request->input('kilometer_akhir');
        $fuelConsumption->save();

        return redirect()->route('fuelConsumption')->with('success', 'Fuel Consumption Updated');
    }

    public function destroy($id) {
        $fuelConsumption = FuelConsumption::find($id);
        $fuelConsumption->delete();

        return redirect()->route('fuelConsumption')->with('success', 'Fuel Consumption Deleted');
    }
}
