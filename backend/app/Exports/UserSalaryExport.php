<?php

namespace App\Exports;

use App\Models\User;
use App\Models\UserSalary;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithProperties;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UserSalaryExport implements FromQuery, WithHeadings, WithColumnWidths, WithStyles
{
    use Exportable;

    private $year = null;
    private $userIds = [];

    public function __construct(int $year, array $userIds)
    {
        $this->year = $year;
        $this->userIds = $userIds;
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Styling an entire column.
            'A'  => ['font' => ['size' => 16]],
            'B'  => ['font' => ['size' => 16]],
            'C'  => ['font' => ['size' => 16]],
            'D'  => ['font' => ['size' => 16]],
            'E'  => ['font' => ['size' => 16]],
            'F'  => ['font' => ['size' => 16]],
            'G'  => ['font' => ['size' => 16]],
            'H'  => ['font' => ['size' => 16]],
            'I'  => ['font' => ['size' => 16]],
            'J'  => ['font' => ['size' => 16]],
            'K'  => ['font' => ['size' => 16]],
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 15,
            'B' => 45,
            'C' => 15,
            'D' => 30,
            'E' => 30,
            'F' => 40,
            'G' => 40,
            'H' => 40,
            'I' => 40,
            'J' => 40,
            'K' => 40,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Tên nhân viên',
            'Ngày công',
            'Ngày nghỉ có phép',
            'Ngày nghỉ không phép',
            'Tăng ca(tính bằng tiếng)',
            'Đi trễ (tính bằng tiếng)',
            'Đi về sớm (tính bằng tiếng)',
            'Hỗ trợ',
            'Tạm ứng',
            'Tổng',
        ];
    }

    /**
    * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function query()
    {
        return User::query()->select(['id', 'full_name']);
    }
}
