<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Model\Admin\Jadwal_foto;

class ReservasiExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Jadwal_foto::all();
    }

    public function map($reservasi): array
    {
        // dd($reservasi);
        return [
            $reservasi->paket->paket,
            $reservasi->user->name,
            $reservasi->user->umur,
            $reservasi->tanggal,
            $reservasi->waktu,
            rupiah($reservasi->paket->harga),
        ];
    }

    public function headings(): array
    {
        $head = ['PAKET', 'NAMA', 'UMUR', 'TANGGAL', 'WAKTU', 'JUMLAH BAYAR'];
        return $head;
    }
}
