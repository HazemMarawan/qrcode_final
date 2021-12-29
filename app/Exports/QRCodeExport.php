<?php

namespace App\Exports;

use App\qrcode;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class QRCodeExport implements FromCollection, WithHeadings
{
    use Exportable;
    protected $qrcodes;

    function __construct($qrcodes) {
           $this->qrcodes = $qrcodes;
    }
    public function collection()
    {
        return collect($this->qrcodes);
    }

    public function headings(): array
    {
        return [
            '#',
            'Link',
        ];
    }
}
