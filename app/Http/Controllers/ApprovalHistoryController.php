<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApprovalHistory;
use App\Exports\ApprovalHistoryExport;
use Maatwebsite\Excel\Facades\Excel;

class ApprovalHistoryController extends Controller {
    public function index() {
        $approvalHistories = ApprovalHistory::all();
        return view('ApprovalHistory.index', compact('approvalHistories'));
    }

    public function create() {
        return view('ApprovalHistory.create');
    }

    public function store(Request $request) {
        $approvalHistory = new ApprovalHistory;
        $approvalHistory->id_booking = $request->input('id_booking');
        $approvalHistory->id_user = $request->input('id_user');
        $approvalHistory->id_level = $request->input('id_level');
        $approvalHistory->status_persetujuan = $request->input('status_persetujuan');
        $approvalHistory->catatan = $request->input('catatan');
        $approvalHistory->save();
        
        return redirect()->route('ApprovalHistory')->with('success', 'Approval History Added');
    }

    public function show($id) {
        $approvalHistory = ApprovalHistory::find($id);
        return view('ApprovalHistory.show', compact('approvalHistory'));
    }

    public function edit($id) {
        $approvalHistory = ApprovalHistory::find($id);
        return view('ApprovalHistory.edit', compact('approvalHistory'));
    }

    public function update(Request $request, $id) {
        $approvalHistory = ApprovalHistory::find($id);
        $approvalHistory->id_booking = $request->input('id_booking');
        $approvalHistory->id_user = $request->input('id_user');
        $approvalHistory->id_level = $request->input('id_level');
        $approvalHistory->status_persetujuan = $request->input('status_persetujuan');
        $approvalHistory->catatan = $request->input('catatan');
        $approvalHistory->save();

        return redirect()->route('ApprovalHistory')->with('success', 'Approval History Updated');
    }

    public function destroy($id) {
        $approvalHistory = ApprovalHistory::find($id);
        $approvalHistory->delete();

        return redirect()->route('ApprovalHistory')->with('success', 'Approval History Deleted');
    }

    public function export_excel()
	{
        
		return Excel::download(new ApprovalHistoryExport, 'Approval History.xlsx');
	}
}
