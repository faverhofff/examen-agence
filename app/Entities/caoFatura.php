<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class caoFatura extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_fatura';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [];

    public function Comissao() {
        return  ($this->valor – ($this->valor*$this->total_imp_inc))*$this->comissao_cn;
    }
}