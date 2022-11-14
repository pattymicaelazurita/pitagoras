<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TutorFixture
 */
class TutorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tutor';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idTutor' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'correo' => 'Lorem ipsum dolor sit amet',
                'fechaNacimiento' => '2022-11-13',
                'cedula' => 'Lorem ips',
            ],
        ];
        parent::init();
    }
}
