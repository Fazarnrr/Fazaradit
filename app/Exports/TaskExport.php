<?php

namespace App\Exports;

use App\Models\Coba;
use App\Models\Task;
use Maatwebsite\Excel\Concerns\FromCollection;


class TaskExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Coba::all();
    }

  /*   public function heading(){

    } */
}
