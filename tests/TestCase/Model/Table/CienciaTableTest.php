<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CienciaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CienciaTable Test Case
 */
class CienciaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CienciaTable
     */
    protected $Ciencia;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ciencia',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ciencia') ? [] : ['className' => CienciaTable::class];
        $this->Ciencia = $this->getTableLocator()->get('Ciencia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ciencia);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CienciaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
