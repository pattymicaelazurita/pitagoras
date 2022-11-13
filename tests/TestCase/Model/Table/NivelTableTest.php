<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NivelTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NivelTable Test Case
 */
class NivelTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NivelTable
     */
    protected $Nivel;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Nivel',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Nivel') ? [] : ['className' => NivelTable::class];
        $this->Nivel = $this->getTableLocator()->get('Nivel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Nivel);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NivelTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
