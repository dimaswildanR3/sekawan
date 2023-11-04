<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\ApprovalLevel;

class ApprovalLevelController extends Controller {
    public function index() {
        $approvalLevels = ApprovalLevel::all();
        return view('ApprovalLevel.index', compact('approvalLevels'));
    }

    public function create() {
        return view('ApprovalLevel.create');
    }

    public function store(Request $request) {
        $approvalLevel = new ApprovalLevel;
        $approvalLevel->nama_level = $request->input('nama_level');
        $approvalLevel->deskripsi = $request->input('deskripsi');
        $approvalLevel->save();
        
        return redirect()->route('ApprovalLevel
        ')->with('success', 'Approval Level Added');
    }

    public function show($id) {
        $approvalLevel = ApprovalLevel::find($id);
        return view('ApprovalLevel.show', compact('approvalLevel'));
    }

    public function edit($id) {
        $approvalLevel = ApprovalLevel::find($id);
        return view('ApprovalLevel.edit', compact('approvalLevel'));
    }

    public function update(Request $request, $id) {
        $approvalLevel = ApprovalLevel::find($id);
        $approvalLevel->nama_level = $request->input('nama_level');
        $approvalLevel->deskripsi = $request->input('deskripsi');
        $approvalLevel->update();

        return redirect()->route('ApprovalLevel')->with('success', 'Approval Level Updated');
    }

    public function destroy($id) {
        $approvalLevel = ApprovalLevel::find($id);
        $approvalLevel->delete();

        return redirect()->route('ApprovalLevel')->with('success', 'Approval Level Deleted');
    }
}
