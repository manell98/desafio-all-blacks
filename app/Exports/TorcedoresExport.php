<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use App\Models\Torcedores;
use DB;

class TorcedoresExport implements FromQuery, WithMapping, WithHeadings, WithEvents
{ 
    use Exportable;

    public function registerEvents(): array
    {
        $styleArray = [
            'font' => [
                'bold' => true,
            ]
        ];

        return [
            AfterSheet::class => function(AfterSheet $event) use ($styleArray) {
                $event->sheet->getStyle('A1:J1')->applyFromArray($styleArray);
            },
        ];    
    }

    public function query()
    {
        return DB::table('torcedores')->orderBy('nome', 'asc');
    }

    public function map($torcedores): array
    {
        return [
            $torcedores->nome,
            $torcedores->documento,
            $torcedores->cep,
            $torcedores->endereco,
            $torcedores->bairro,
            $torcedores->cidade,
            $torcedores->uf,
            $torcedores->telefone,
            $torcedores->email,
            $torcedores->ativo,
        ];
    }
    
    public function headings(): array
    {
        return [
            'Nome',
            'Documento',
            'Cep',
            'Endereço',
            'Bairro',
            'Cidade',
            'Estado',
            'Telefone',
            'E-mail',
            'Ativo',
        ];
    }
}
