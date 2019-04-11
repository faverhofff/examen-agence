<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class caoSalario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_salario';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [];
     
}