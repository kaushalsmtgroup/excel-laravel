<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;

class ExcelController extends Controller
{
    public function export()
    {

        $fileName = 'users_export_' . date('Y-m-d_H-i-s') . '.xlsx';
        return Excel::download(new UsersExport, $fileName);
    }

    // Import users from Excel
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);

        Excel::import(new UsersImport, $request->file('file')->store('temp'));

        return back()->with('success', 'Users imported successfully!');
    }
}
