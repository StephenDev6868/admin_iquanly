<?php

namespace App\Imports;

use App\Models\UserSalary;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserSalaryImport implements ToCollection, WithHeadingRow
{
    use Importable;
    private $start_at = '';
    private $end_at = '';

    public function __construct(string $start_at, string $end_at)
    {
        $this->start_at = Carbon::parse($start_at)->format('Y-m-d');
        $this->end_at = Carbon::parse($end_at)->format('Y-m-d');
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            UserSalary::updateOrCreate([
                'user_id' => $row['id'] ?? 0,
                'start_at' => $this->start_at,
                'end_at' => $this->end_at,
            ],[
                'work_day' => $row['ngay_cong'] ?? 0,
                'permitted_day_off' => $row['ngay_nghi_co_phep'] ?? 0,
                'not_allowed_day_off' => $row['ngay_nghi_khong_phep'] ?? 0,
                'overtime' => $row['tang_catinh_bang_tieng'] ?? 0,
                'eat_shift' => $row['An ca'] ?? 0,
                'late' => $row['di_tre_tinh_bang_tieng'] ?? 0,
                'early' => $row['di_ve_som_tinh_bang_tieng'] ?? 0,
                'support_money' => $row['ho_tro'] ?? 0,
                'advance' => $row['tam_ung'] ?? 0,
                'sum' => $row['tong'] ?? 0,
            ]);
        }
    }

    public function headingRow(): int
    {
        return 1;
    }
}
