<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProgresoFixture
 */
class ProgresoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'progreso';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idProgreso' => 1,
                'idNivelAlcanzado' => 1,
                'fecha' => '2022-11-13',
                'puntajeActual' => 1,
                'idEstudiante' => 1,
            ],
        ];
        parent::init();
    }
}
