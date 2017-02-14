<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MembrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MembrosTable Test Case
 */
class MembrosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MembrosTable
     */
    public $Membros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.membros',
        'app.liderancas',
        'app.organizacaos',
        'app.pessoas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Membros') ? [] : ['className' => 'App\Model\Table\MembrosTable'];
        $this->Membros = TableRegistry::get('Membros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Membros);

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
