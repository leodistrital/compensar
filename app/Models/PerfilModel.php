<?php

namespace App\Models;

use CodeIgniter\Model;

class PerfilModel extends Model
{
    protected $table      = 'perfiles';
    protected $primaryKey = 'cod_per';
    protected $returnType     = 'array';
    protected $allowedFields = ['tipoid_per', 'id_per', 'nom_per', 'ape_per', 'cat_per', 'edad_per', 'car_per'];

    protected $validationRules    = [
        'tipoid_per' => 'required|numeric|min_length[1]',
        'nom_per' => 'required|alpha_numeric_space',
        'ape_per' => 'required|alpha_numeric_space',
        'car_per' => 'required|alpha_numeric_space',
    ];
}