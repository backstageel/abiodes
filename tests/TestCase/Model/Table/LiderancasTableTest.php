<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LiderancasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LiderancasTable Test Case
 */
class LiderancasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LiderancasTable
     */
    public $Liderancas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.liderancas',
        'app.organizacaos',
        'app.pessoas',
        'app.membros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Liderancas') ? [] : ['className' => 'App\Model\Table\LiderancasTable'];
        $this->Liderancas = TableRegistry::get('Liderancas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Liderancas);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
