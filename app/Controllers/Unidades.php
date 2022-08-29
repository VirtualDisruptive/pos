<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UnidadesModel;

class Unidades extends BaseController
{
    protected $unidades;

    public function __construct()
    {
        $this->unidades = new UnidadesModel();
    }

    public function index($activo = 1)
    {
        $unidades = $this->unidades->where('activo', $activo)->findAll();

        $data = ['titulo' => 'unidades', 'datos' => $unidades];

        echo view('header');
        echo view('unidades/unidades', $data);
        echo view('footer');
    }

    public function nuevo()
    {
        $data = ['titulo' => 'agregar unidad'];
        echo view('header');
        echo view('unidades/nuevo', $data);
        echo view('footer');
    }
}
