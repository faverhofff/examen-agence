<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class caoOS extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_os';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [];

    public function ReceitaLiquida() {
        $liquida = 0;
        foreach($this->Faturas as $fatura)
            $liquida += $fatura->valor - $fatura->total_imp_inc;

        return $liquida;
    }

    public function Lucro() {
        $comision = 0;
        foreach($this->Faturas as $fatura)
            $comision += $fatura->Comissao();

        return $this->ReceitaLiquida - ($this->Usuario->CustoFixo + $comision);
    }

     public function Faturas()
     {
        return $this->hasMany(caoFatura::class, 'co_os', 'co_os');
     }    

     public function Usuario()
     {
        return $this->hasOne(caoUsuario::class, 'co_usuario', 'co_usuario');
     }        
}