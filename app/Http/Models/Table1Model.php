<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Table2Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Table1Model extends Model
{
    public $table = 'table_1';

    public static $idAuto = 1;

    protected $primaryKey = "id_table_1";


    public $timestamps = false;

    public function table2(): HasOne
    {
        // return $this->hasOne(Table2Model::class, 'id_table_2', 'id_table_1');
        return $this->hasOne(Table2Model::class, 'id_table_2', $this->primaryKey);

    }


    
}
