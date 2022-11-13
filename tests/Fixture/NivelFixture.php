<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NivelFixture
 */
class NivelFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'nivel';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idNivel' => 1,
                'nombre' => 'Lorem ipsum d',
                'temas' => 'Lorem ipsum dolor sit amet',
                'idCiencia' => 1,
            ],
        ];
        parent::init();
    }
}
