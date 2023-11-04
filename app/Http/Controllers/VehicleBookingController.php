<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VehicleBooking;

class VehicleBookingController extends Controller {
    public function index() {
        $bookings = VehicleBooking::all();
        return view('VehicleBooking.index', compact('bookings'));
    }

    public function create() {
        $Vehicle = \App\Vehicle::get();
        $User = \App\User::get();
        return view('VehicleBooking.create',compact(['Vehicle','User','Vehicle' => $Vehicle,'User' => $User]));
    }

    public function store(Request $request) {
        $booking = new VehicleBooking;
        $booking->id_user = $request->input('id_user');
        $booking->id_vehicle = $request->input('id_vehicle');
        $booking->tanggal_pemesanan = $request->input('tanggal_pemesanan');
        $booking->tanggal_mulai = $request->input('tanggal_mulai');
        $booking->tanggal_selesai = $request->input('tanggal_selesai');
        $booking->status_persetujuan = $request->input('status_persetujuan');
        $booking->catatan = $request->input('catatan');
        $booking->save();
        
        return redirect()->route('VehicleBooking')->with('success', 'Vehicle Booking Added');
    }

    public function show($id) {
        $booking = VehicleBooking::find($id);
        return view('VehicleBooking.show', compact('booking'));
    }

    public function edit($id) {
        $booking = VehicleBooking::find($id);
        return view('VehicleBooking.edit', compact('booking'));
    }

    public function update(Request $request, $id) {
        $booking = VehicleBooking::find($id);
        $booking->id_user = $request->input('id_user');
        $booking->id_vehicle = $request->input('id_vehicle');
        $booking->tanggal_pemesanan = $request->input('tanggal_pemesanan');
        $booking->tanggal_mulai = $request->input('tanggal_mulai');
        $booking->tanggal_selesai = $request->input('tanggal_selesai');
        $booking->status_persetujuan = $request->input('status_persetujuan');
        $booking->catatan = $request->input('catatan');
        $booking->save();

        return redirect()->route('VehicleBooking')->with('success', 'Vehicle Booking Updated');
    }

    public function destroy($id) {
        $booking = VehicleBooking::find($id);
        $booking->delete();

        return redirect()->route('VehicleBooking')->with('success', 'Vehicle Booking Deleted');
    }
}
