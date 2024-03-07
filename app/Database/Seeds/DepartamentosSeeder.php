<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nombre' => 'Almacen',
                'description' => 'Descripcion del Almacen',
            ], [
                'nombre' => "Contabilidad",
                'description' => 'Descripcion del Almacen',
            ], [
                'nombre' => "Finanzas",
                'description' => 'Descripcion del Almacen',

            ],
            [
                'nombre' => "Recursos Humanos",
                'description' => 'Descripcion del Almacen',
            ],
            [
                'nombre' => "Sistemas",
                'description' => 'Descripcion del Almacen',
            ],
        ];
        $this->db->table("departamentos")->insertBatch($data);
    }
}
