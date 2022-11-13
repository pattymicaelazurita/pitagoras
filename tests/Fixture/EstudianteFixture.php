<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstudianteFixture
 */
class EstudianteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'estudiante';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idEstudiante' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'contrasenia' => 'Lorem ipsum dolor sit amet',
                'correo' => 'Lorem ipsum dolor sit amet',
                'fechaNacimiento' => '2022-11-13',
                'cedula' => 'Lorem ips',
                'idTutor' => 1,
            ],
        ];
        parent::init();
    }
}
