<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AdministradorFixture
 */
class AdministradorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'administrador';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idAdministrador' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'correo' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
