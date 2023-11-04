<?php

namespace App\Exports;

use App\ApprovalHistory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ApprovalHistoryExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('ApprovalHistory.downloadexcel', [
            'ApprovalHistory' => ApprovalHistory::all()
        ]);
    }
}
