<?php
namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
     * Export data collection
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Customize the fields being exported
        return User::select('name', 'email', 'created_at')->get();
    }

    /**
     * Define headers for the exported file
     *
     * @return array
     */
    public function headings(): array
    {
        return ['Name', 'Email', 'Created At'];
    }
}
