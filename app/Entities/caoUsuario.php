<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class caoUsuario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_usuario';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [];

    public function CustoFixo() {
        return $this->Salario->brut_salario;
    }

    public function Permissao()
    {
       return $this->hasMany(PermissaoSistema::class, 'co_usuario', 'co_usuario');
    }    

    public function Salario()
    {
       return $this->hasOne(caoSalario::class, 'co_usuario', 'co_usuario');
    }      
}