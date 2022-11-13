<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProgresoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProgresoTable Test Case
 */
class ProgresoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProgresoTable
     */
    protected $Progreso;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Progreso',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Progreso') ? [] : ['className' => ProgresoTable::class];
        $this->Progreso = $this->getTableLocator()->get('Progreso', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Progreso);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProgresoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
