<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class PermissaoSistema extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permissao_sistema';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [];

}