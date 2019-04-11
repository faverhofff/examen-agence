<?php

namespace App\Repositories;

use App\Entities\caoUsuario;

/**
 * Class PerformanceComercialRepository
 * @package App\Repositories
 * @version April 11, 2019, 11:01 pm UTC
 *
 * @method caoUsuario getConsultores()
*/
class PerformanceComercialRepository
{
    
    public function getConsultores() {
        return caoUsuario::whereHas('Permissao', function($query) {
            $query->where('co_sistema', 1);
            $query->where('in_ativo', 'S');
            $query->whereIn('co_tipo_usuario', [0,1,2]);
        })->pluck('co_usuario', 'no_usuario');
    }

    public function getReceitaLiquida($consulto, $month = null, $year = null) {
        return  CaoOS::where('co_usuario', $consultor)
                    ->with(['Facturas' => function($query) use ($month, $year) {
                        // $query->sum(DB::raw('valor - total_imp_inc'));
                        $query->select(DB::raw('sum(valor - total_imp_inc) as YYYYY'));
                        if (!is_null($month))
                            $query->whereMonth('data_emissao', $month);
                        if (!is_null($year))
                            $query->whereYear('data_emissao', $year);
                    }]);
    }
}
