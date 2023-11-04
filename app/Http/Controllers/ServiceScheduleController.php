<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceSchedule;

class ServiceScheduleController extends Controller {
    public function index() {
        $serviceSchedules = ServiceSchedule::all();
        return view('ServiceSchedule.index', compact('serviceSchedules'));
    }

    public function create() {
        $Vehicle = \App\Vehicle::get();
        return view('ServiceSchedule.create',compact(['Vehicle','Vehicle' => $Vehicle,]));
    }

    public function store(Request $request) {
        $serviceSchedule = new ServiceSchedule;
        $serviceSchedule->id_vehicle = $request->input('id_vehicle');
        $serviceSchedule->tanggal_servis = $request->input('tanggal_servis');
        $serviceSchedule->deskripsi = $request->input('deskripsi');
        $serviceSchedule->status_servis = $request->input('status_servis');
        $serviceSchedule->save();
        
        return redirect()->route('ServiceSchedule')->with('success', 'Service Schedule Added');
    }

    public function show($id) {
        $serviceSchedule = ServiceSchedule::find($id);
        return view('ServiceSchedule.show', compact('serviceSchedule'));
    }

    public function edit($id) {
        $serviceSchedule = ServiceSchedule::find($id);
        return view('ServiceSchedule.edit', compact('serviceSchedule'));
    }

    public function update(Request $request, $id) {
        $serviceSchedule = ServiceSchedule::find($id);
        $serviceSchedule->id_vehicle = $request->input('id_vehicle');
        $serviceSchedule->tanggal_servis = $request->input('tanggal_servis');
        $serviceSchedule->deskripsi = $request->input('deskripsi');
        $serviceSchedule->status_servis = $request->input('status_servis');
        $serviceSchedule->save();

        return redirect()->route('ServiceSchedule')->with('success', 'Service Schedule Updated');
    }

    public function destroy($id) {
        $serviceSchedule = ServiceSchedule::find($id);
        $serviceSchedule->delete();

        return redirect()->route('ServiceSchedule')->with('success', 'Service Schedule Deleted');
    }
}
