<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

use App\Repositories\PerformanceComercialRepository;

class PerformanceComercialController extends Controller
{

    /** @var  AccountClasificationRepository */
    private $performanceComercialRepository;
    
    public function __construct(PerformanceComercialRepository $PComercialRepository)
    {
        $this->performanceComercialRepository = $PComercialRepository;
    }    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $params['consultores'] = $this->performanceComercialRepository->getConsultores();

        return view('comercial.performance.index', $params);
    }

}